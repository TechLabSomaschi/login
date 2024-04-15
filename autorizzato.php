<?php

echo "Lo user è: ".$_POST["user"];
echo "<br>La password è: ".$_POST["password"]."<br>";


$dbhost = "localhost";
$dbname = "utenti";
$dbuser = "root";
$dbpasswd = "";

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

$result = $mysqli->query("SELECT id FROM user WHERE nome = '".$_POST["user"]."' AND password = '".$_POST["password"]."'");
$numbers = $result->fetch_all(MYSQLI_ASSOC);

//if(!empty($numbers)){
if(count($numbers) != 0){
    header('Location: corretto.php');
}
else {
    header('Location: errato.php');
}

?>