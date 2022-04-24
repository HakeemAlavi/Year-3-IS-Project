<?php

$host="localhost";
$user="root";
$pwd="";
$db="isproject";

$con = mysqli_connect($host,$user,$pwd,$db);

if (!$con)
{
	die("failed to connect!");
}