<?php
class userDAO
{

    public function registerUser()
    {
        include_once('config.php');
        include_once('userClass.php');
        $dbObj = new DataBaseConfig();
        $conn = $dbObj->getDBObject();
        $userObj = new User();
        var_dump($userObj);
        $stmt = $conn->prepare("INSERT INTO users (userName, userEmail, userPassword) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $userObj->getUserName(), $userObj->getUserEmail(), $userObj->getUserPassword());
        $stmt->execute();
        echo "user inserted successfully";
    }
}
?>