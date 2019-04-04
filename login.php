<html>
<body>

<?php
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    //Create connection to MySQL Database
    $connection = new mysqli("localhost", "id9130300_admin", "admin");

    //Check connection
    if($connection->connect_error)
    {
        exit("Connection failed: <b>" . $connection->connect_error . "</b>");
    } else {
        echo("<b>Connected successfully!</b>");
    }

    if(!file_exists($username . ".txt"))
    {
        $profile = fopen($username . ".txt", "x");

        fwrite($profile, "username=" . $username . "\n" . "password=" . $password);
        fclose($profile);
    } else {
        echo '<script> 
                alert("User already exists!");
              </script>';
    }
?>

</body>
</html>
