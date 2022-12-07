<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loging_sampl_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{


	die("failed to connect!");

}
else
{
	// echo "connected";
}

?>

 