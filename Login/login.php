
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <h1>LOGIN</h1>
        <form action="./loginprocess.php" method="POST">
            <div class="form-control">
                <span class="error_msg"></span>
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="form-control">
                <span class="error_msg"></span>
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="form-control">
                <button class="btn" type="submit" name="loginCustomer">LOGIN</button>
            </div>

            <p>Not registered? <a href="./register.php">Create an account</a></p>
        </form>
    </div>
</body>
</html>