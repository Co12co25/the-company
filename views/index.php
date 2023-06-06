<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <form action="../actions/login.php" method="post" class="w-50 mt-5 mx-auto border rounded-2 p-3">
            <h1 class="display-6 text-center">LOGIN</h1>

            <input type="text" name="username" placeholder="USERNAME" class="form-control mb-3">
            <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-4">

            <button tupe="submit" class="btn btn-primary mb-3 w-100">Log in</button>
            <p class="text-center">
                <a href="register.php" class="text-decoration-none">Create account</a>
            </p>
        </form>
        
    </div>
</body>
</html>