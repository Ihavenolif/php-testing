<html>
<body>

<?php
    $username = $_REQUEST["username"];
    $password = password_hash($_REQUEST["password"], PASSWORD_DEFAULT);
    $email = $_REQUEST["email"];

    $insertinto = " INSERT INTO `profiles`.`Profiles` (`ProfileID`, `Username`, `Password`, `E-Mail`, `RegDate`) 
                    VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP), (NULL, '', '', '', CURRENT_TIMESTAMP);";

    //Create connection to MySQL Database
    $connection = new mysqli("sql.endora.cz:3312", "thewallovec", "admin");

    //Check connection
    if($connection->connect_error)
    {
        exit("Connection failed: <b>" . $connection->connect_error . "</b>");
    } else {
        echo("<br>Connected successfully!</br>");
    }

    //echo($insertinto);

    if($connection->query($insertinto) === TRUE) {
        echo("<br>Account created successfully!</br>");
    } else {
        echo("Error creating account: <br>" . $connection->error . "</br>");
    }
?>

</body>
</html>
