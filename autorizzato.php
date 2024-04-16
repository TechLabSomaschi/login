<?php
@session_start();

$dbhost = "localhost";
$dbname = "utenti";
$dbuser = "root";
$dbpasswd = "";

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);
$result = $mysqli->query("SELECT id FROM user WHERE nome = '".$_POST["user"]."' AND password = '".$_POST["password"]."'");
$numbers = $result->fetch_all(MYSQLI_ASSOC);

if(count($numbers) != 0){
    $_SESSION["loggato"] = true;
    header('Location: corretto.php');
}
else {
    $_SESSION["loggato"] = false;
    header('Location: errato.php');
}
?>