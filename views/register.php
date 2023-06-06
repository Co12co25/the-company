<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="../actions/register.php" method="post" class="w-50 my-5 border rounded-2 p-3 mx-auto"required>
            <h1 class="display-6 text-center mb-3">REGISTER</h1>

            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" class="form-control mb-2"required>

            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="form-control mb-2"required>

            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control mb-2" required maxlength="15">

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control mb-4"required>

            <button type="submit" class="btn btn-success w-100">Register</button>
            <p class="text-center">Registerd already? <a href="">Log in</a>.</p>
        </form>

    </div>
</body>
</html>