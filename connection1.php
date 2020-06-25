<?php
$mysqli = new mysqli("localhost","root","","my dbs");
if($mysqli->connect_error)
{
    echo $mysqli->connect_error;
}
?>