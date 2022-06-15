<?php 
	
    // assign database credentials
    $Host = "localhost";
    $User = "root";
    $Password = "";
    $Database = "fitness-app-db";

    // pass db credentials
try
{
    // open new connection to MYSQl
$con=mysqli_connect($Host, $User, $Password, $Database);
}
// catch the error and display the error
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
