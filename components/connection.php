<?php
define("CONNECTION","localhost");
define("USERNAME","root");
define("PASSOWRD","");
define("DATABASE","cgsproject");
$mysqli = new mysqli(CONNECTION,USERNAME,PASSOWRD,DATABASE);
//error checking.
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
?>