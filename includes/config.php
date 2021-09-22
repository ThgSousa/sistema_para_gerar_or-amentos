<?php
    $sql["driver"] = "mysql";
    $sql["host"] = "localhost";
    $sql["user"] = "root";
    $sql["pass"] = "";
    $sql["base"] = "mobile";
    $sql["options"] = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );
    $bdd = new PDO($sql["driver"] .":host=". $sql["host"] .";dbname=". $sql["base"], $sql["user"], $sql["pass"], $sql["options"]);
    $conn = mysqli_connect($sql["host"], $sql["user"], $sql["pass"], $sql["base"]);
?>
                        