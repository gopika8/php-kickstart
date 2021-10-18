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
    <form action="sigin.php" method="POST">
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

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', '', 'user') or die("Connection failed:" .mysqli_connect_error());
        if(isset($_POST['userEmail']) && isset($_POST['userPassword'])){
            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];

            $sql = "SELECT * FROM users WHERE userEmail='$userEmail' AND userPassword='$userPassword'";
            $query = mysqli_query($conn, $sql);
            if($query){
                echo "Login Successful!";
            }
            else {
                echo "Unsuccessful Login";
            }
        }
        }
?>