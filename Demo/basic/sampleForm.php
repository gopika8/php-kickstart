<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <title>Registeration Form</title>
</head>

<body>
    <div>
    <h1>Sign Up</h1>
    <form action="register.php" method="POST">
        <label>Name</label>
        <input type="text" name="userName" required/>
        <br><br>
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