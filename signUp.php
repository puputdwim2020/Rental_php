<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sign.css">
    <title>signUp</title>
</head>

<body>
    <form action="signIn.php" method="POST">
        <h2>Sign Up
            <br>Rental Mobil NyeawaIn
        </h2>

        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama" required>

        <label>Username</label>
        <input type="text" name="username" placeholder="Usernme" required>

        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Passwrd" required>

        <button type="submit"><b>Submit</b></button>
    </form>
</body>

</html>