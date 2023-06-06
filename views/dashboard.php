<?php

require("../classes/User.php");

$user = new User;
$user_list = $user->getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bs  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include("navbar.php"); ?>

    <div class="container w-75 my-5">
        <h2 class="h4 mb-2">User List</h2>

        <table class="table table-hover">
            <thead class="table-secondary">
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th></th>
            </thead>
            <tbody>
                <?php while($user_row = $user_list->fetch_assoc()) {?>
                <tr>
                    <td><?= $user_row['id']?></td>
                    <td><?=$user_row['first_name']?></td>
                    <td><?=$user_row['last_name']?></td>
                    <td><?=$user_row['username']?></td>
                    <td>
                        <!-- edit -->
                        <a href="edit-user.php?id=<?=$user_row['id'] ?>" class="btn btn-sm btn-outline-warning me-2">
                        <i class="fa-solid fa-pencil"></i>
                        </a>
                        <!-- delete -->
                        <?php if($_SESSION['user_id']!=$user_row['id']){ ?>
                        <form action="../actions/deleteUser.php" method="post" class="d-inline">
                            <input type="hidden" name="user_id" value="<?=$user_row['id'] ?>">
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>