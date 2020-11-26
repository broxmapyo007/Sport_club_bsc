<?php
/*
    configuration file
    
   for database - Sports_club
       login table - Login_tb
       username - admin
       password - admin

*/
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'Sports_club');

    // make sure we dont connnect database to every function

$db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
else{}//echo ' Database server connection pass.';}
mysqli_select_db($db,$DB_DATABASE);
//////////////
// create db Sports_club 8f not existing...
    // Create db
    $sql = "CREATE DATABASE IF NOT EXISTS Sports_club";
if (mysqli_query($db,$sql)){
  
  $sql="CREATE TABLE Login_cred(".
       "fname TEXT ,".
       "mname TEXT,".
       "lname TEXT,".
       "email TEXT,".
       "username TEXT ,".
       "password  TEXT);";
  mysqli_select_db($db,$DB_DATABASE);
$retval = mysqli_query($db,$sql);
if(! $retval )
{
}else{
echo "Table created successfully\n";}

  
}



$db->close();
?>