<?php
//echo '<h1>contact us php<hr>';
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'Sports_club');
$db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD);
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

mysqli_select_db($db,$DB_DATABASE);
$sql="CREATE TABLE contact_us(".
       "name TEXT ,".
       "email  TEXT,".
       "title TEXT,".
       "msg TEXT);";
mysqli_select_db($db,'Sports_club');
$retval = mysqli_query($db,$sql);
if($_SERVER["REQUEST_METHOD"] == "POST") {
  mysqli_select_db($db,'Sports_club');
$nam=$_POST['name'];
$em=$_POST['email'];
$title=$_POST['subject'];
$msg=$_POST['msgg'];

if ($nam!="" and $em!="" and $title!="" and $msg!="" )
{
 /* echo '<hr>complete data to save...'.
  "<br> name : ".$nam.
  '<br> email : '.$em.
  '<br> title : '.$title.
  '<br> msg : '.$msg;*/
  mysqli_select_db($db,'Sports_club');
  $sql = " INSERT INTO contact_us (name,email,title,msg) VALUES ('$nam','$em','$title','$msg');";

     if ($db->query($sql)===TRUE){

       header("location: /index.html");
       exit();
       echo '<br><hr>Data saved';
     }
     else{
       echo '<br>data not saved yet...<br>'.mysqli_error($db);}
}
else{echo '<hr>error in '.mysqli_error($db);
}
  
}
else{
  echo '<hr>error : '.mysqli_error($db);
}
  
  

  
?>