<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <title>Registeration Form</title>
</head>

<body>
    <div>
    <h1>Sign In</h1>
    <form action="login.php" method="POST">
        <label>Email Id</label>
        <input type="email" name="userEmail" required/>
        <br><br>
        <label>Password</label>
        <input type="password" name="userPassword" required/>
        <br><br>
        <input type="submit" name="submit"/>
    </form>
    <div>
</body>
</html>
