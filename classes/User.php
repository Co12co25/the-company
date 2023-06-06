<?php

require_once("Database.php");

//require -- show erroe if it cannot find the file; not continue
//include -- continue code

class User extends Database {

    public function addUser($first_name, $last_name, $username, $password){

        $sql = "INSERT INTO users(first_name, last_name, username, `password`)
                values('$first_name', '$last_name', '$username', '$password')";

        if($this -> conn ->query($sql)){
            header("location:  ../views"); //redirect ot index.php of views folder
            exit;
        }else{
            die("Error adding user: ". $this->conn->error);
        }

    }

    public function login($username, $password){
        $sql = "SELECT * FROM users WHERE username = '$username'";

        if($result = $this->conn->query($sql)){
            if($result-> num_rows == 1){
                $user_details = $result->fetch_assoc();
                //check if password is correct
                if(password_verify($password, $user_details['password'])){
                    //log in and start session

                    session_start();

                    $_SESSION['user_id'] = $user_details['id'];
                    $_SESSION['username'] = $user_details['username'];

                    header("location:  ../views/dashboard.php");
                    exit;
                }else{
                    die("PAssword is incorrect");
                }
            }else{
                die("Cannot find user.");
            }
        }else{
            die("Error logging in: ".$this->conn->error);
        }
    }

    public function getUsers(){
        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving users: ".$this->conn->error);
        }
    }

    public function getUser($id){
        $sql = "SELECT * FROM users WHERE id=$id";

        if($result = $this -> conn-> query($sql)){
            return $result -> fetch_assoc();
        }else{
            die("Error retrieving user: ".$this->conn->error);
        }
    }

    public function editUser($id, $first_name, $last_name, $username){
        $sql = "UPDATE users SET first_name = '$first_name',
                                last_name = '$last_name',
                                username = '$username'
                                WHERE id = $id";
        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Eroor editing user: ".$this->conn->error);
        }
    }

    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id=$id";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error deleting user: ".$this->conn->error);
        }
    }

    public function updatePhoto($uid, $file_name, $tmp_name){

        $sql = "UPDATE users SET photo = '$file_name'
                WHERE id = $uid";
        if($this->conn->query($sql)){
            //move file
            $destination = "../images/$file_name";
            if(move_uploaded_file($tmp_name, $destination)){
                header("location: ../views/profile.php");
                exit;
            }else{
                die("Cannot move file");
            }
        }else{
            die("Error updating user: ".$this->conn->error);
        }
    }
  
}