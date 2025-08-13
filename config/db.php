<?php

try {
    $host = "localhost";
    $dbusername = "root";
    $dbname = "digilanx";
    $dbpassword = "";

    $con = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessge();
}



?>