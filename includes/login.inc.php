<?php

session_start();

if (isset($_POST["submit"])) {

$name = $_POST["uid"];
$password = $_POST["password"];

require_once "dbh.inc.php";
require_once "functions.inc.php";

if(emptyInputLogin($name, $password) !== false) {
    header("location: ../login.php?error=emptyinput");
    exit();
}

loginUser($conn, $name, $password);
}

else {
    header("location: ../login.php");
    exit();
}
?>