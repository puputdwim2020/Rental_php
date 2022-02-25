<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sign.css">
    <title>login</title>
</head>

<body>
    <form action="home.php" method="POST">
        <h2>Sign In
            <br>Rental Mobil NyeawaIn
        </h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">

        <label>Password</label>
        <input type="password" name="password" placeholder="Password">

        <p>Belum punya akun? <a href="signUp.php" style="text-decoration:none">Sign Up</a></p>
        <button type="submit"><b>Login</b></button>
    </form>
</body>

</html>