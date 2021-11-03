<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', '', 'user') or die("Connection failed:" .mysqli_connect_error());
        if(isset($_POST['userEmail']) && isset($_POST['userPassword'])){
            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];
            $sql = "SELECT userEmail, userPassword FROM users";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row["userEmail"] == $userEmail){
                        if($row["userPassword"] == $userPassword)
                        echo "Login Successful";
                        else echo "Incorrect username or password";
                        break;
                    }
                    else echo "No user found";
                    echo "<br>";
                }
            }
            else {
                echo "Server Down";
            }
        }
        }
?>