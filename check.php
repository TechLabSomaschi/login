<?php
@session_start();
if(!$_SESSION["loggato"]){
    header('Location: index.php');
}
?>