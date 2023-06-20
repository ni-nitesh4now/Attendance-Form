<?php
$servername="sql104.epizy.com";
$username="epiz_31446514";
$password="tZm7wqGbfCj";
$dbname="epiz_31446514_actionn";

$connect = mysqli_connect($servername,$username,$password, $dbname); 

if(!$connect)
{

	die("failed to connect!");
}

?>