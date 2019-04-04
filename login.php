<html>
<body>

<?php
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $email = $_REQUEST["email"];

    $tablecreate = "CREATE TABLE Profiles(
                    ProfileID int,
                    E-mail varchar(36),
                    Username varchar(24),
                    Passwrd varchar(24),
                    Reg_date TIMESTAMP
                    );";

    

    //Create connection to MySQL Database
    $connection = new mysqli("localhost", "id9130300_admin", "admin");

    //Check connection
    if($connection->connect_error)
    {
        exit("Connection failed: <b>" . $connection->connect_error . "</b>");
    }

    if($connection->query($tablecreate) === TRUE) {
        echo("<br>Table Profiles created successfully</br>");
    } else {
        echo("Error creating table: <br>" . $connection->error . "</br>");
    }

    /*if(!file_exists($username . ".txt"))
    {
        $profile = fopen($username . ".txt", "x");

        fwrite($profile, "username=" . $username . "\n" . "password=" . $password);
        fclose($profile);
    } else {
        echo '<script> 
                alert("User already exists!");
              </script>';
    }*/
?>

</body>
</html>
