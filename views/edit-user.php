<?php
require("../classes/User.php");

$user = new User;
$user_data = $user->getUser($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include("navbar.php") ?>

    <div class="container w-75 my-5">
        <form action="../actions/edituser.php" method="post" class="w-50 mx-auto">
            <h2 class="display-6 mb-3ntext-uppercase">EDIT USER</h2>

            <input type="hidden" name="user_id" value="<?=$user_data['id']?>">

            <label for="first-name" class="form-label fw-bold">First Name</label>
            <input type="text" name="first_name" value="<?= $user_data['first_name']?>"id="first-name"class="form-control mb-2" required>

            <label for="last-name" class="form-label fw-bold">Last Name</label>
            <input type="text" name="last_name" value="<?=$user_data['last_name']?>" id="last-name" class="form-control mb-2" required>

            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" value="<?=$user_data['username']?>" id="username" class="form-control mb-2" required>

            <button type="submit" class="btn btn-warning me-1">Save</button>
            <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
        </form>

    </div>
    
</body>
</html>