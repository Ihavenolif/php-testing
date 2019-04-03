<html>
<body>

<?php
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    if(!file_exists($username . ".txt"))
    {
        $profile = fopen($username . ".txt", "x");

        fwrite($profile, "username=" . $username . "\n" . "password=" . $password);
        fclose($profile);
    } else {
        echo "<script> alert("USer already exists!")</script>"
    }
?>

</body>
</html>
