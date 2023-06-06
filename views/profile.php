<?php
require("../classes/User.php");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include("navbar.php");
    
    $user = new User;
    $user_data = $user->getUser($_SESSION['user_id']);
    ?>
    
    <div class="container w-75">
        <div class="card w-50 mx-auto my-5">
            <div class="card-header">
                <img src="../images/<?= $user_data['photo']?>" alt="<?= $user_data['username'] ?>'s photo" class="img-thumbnail">
            </div>
            <form action="../actions/uploadPhoto.php" method="post" class="card-body" enctype="multipart/form-data">
                <label for="photp" class="form-label">Choose Photo</label>
                <input type="file" name="photo" id="photo" class="form-control mb-2">

                <button type="submit" class="btn btn-outline-secondary">Upload Photo</button>

                <h3 class="h4 mt-4"><?= $user_data['first_name']. " ".$user_data['last_name'] ?></h3>
                <h4 class="h5"><?= $user_data['username'] ?></h4>
            </form>
        </div>
    </div>
</body>
</html>