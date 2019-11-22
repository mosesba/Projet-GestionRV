<?php

/** 
 * Data base connect
 * connection a la base de donnees par la methode PDO
 * version php 7
 * 
 * @
 */

$server = "127.0.0.1";
$user = "root";
$pass = "root";
$dbname = "rv_gestion";
/** 
 * Data base connect
 * connection a la base de donnees par la methode PDO
 * version php 7
 * 
 *  PDO connection to data base
 */


try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Connected successfully"; 
    //echo "<script>alert('succes!');</script>";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    echo "<script>alert('failed to connect!');</script>";
}
