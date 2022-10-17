<?php
define("server", "localhost");
define("user", "root");
define("password", "0000");
define("database", "1011voltag");


//mysql_connect(); parameters
$connect = mysqli_connect(server, user, password, database);
//run a simple condition to check your connection
if (!$connect)
{
    die("You DB connection has been failed!: " . mysqli_connect_error());
}
$connection = "You have successfully connected to the mysql database";
//echo $connection;
?>