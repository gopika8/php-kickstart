<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', '', 'user') or die("Connection failed:" .mysqli_connect_error());
        if(isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPassword'])){
            $userName = $_POST['userName'];
            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];

            $sql = "INSERT INTO `users` (`userName`, `userEmail`, `userPassword`) VALUES ('$userName', '$userEmail', '$userPassword')";
            $query = mysqli_query($conn, $sql);
            if($query){
                echo "Registeration Successful!";
            }
            else {
                echo "Unsuccessful Registeration";
            }
        }
        }
        ?>