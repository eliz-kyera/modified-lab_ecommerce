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
        <h1>Customer Registration</h1>
        <form action="./registerprocess.php" method="POST">
            <div class="form-control">
                <input type="text" placeholder="Full name" name="name" id="name" required>
            </div>

            <div class="form-control">
                <input type="email" placeholder="email" name="email" id="email" required>
            </div>

            <div class="form-control">
            
                <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
                title="Must contain at least one number and one uppercase 
                and lowercase letter, and at least 6 or more characters" required>
            </div>

            <div class="form-control">
                <input type="text" placeholder="country" name="country" id="country" required>
            </div>

            <div class="form-control">
                <input type="text" placeholder="city" name="city" id="city" required>
            </div>

            <div class="form-control">
                <input type="tel" placeholder="contact" name="contact" id="contact" required>
            </div>

            <!-- <div class="form-control">
                <input type="text" name="img"> 
                <input type="file" name="img" id="img" accept="image/*"> 
            </div> -->

            <div class="form-control">
                <input type="submit" name="submit" value="REGISTER"> 
            </div>
            
           
        </form>
    </div>

    <script src="../JavaScript/validation.js"></script>
</body>
</html>