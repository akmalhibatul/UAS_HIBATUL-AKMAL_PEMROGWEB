<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="proses_login.php" method="post">
        <label for="">Nim</label>
        <input type="text" name="nim" required>
        <br><br>
        <label for="">Password</label>
        <input type="password" name="password" required>
        <br><br>
        <button type="submit">Submit</button>
        <button type="reset">Reser</button>
    </form>
</body>
</html>