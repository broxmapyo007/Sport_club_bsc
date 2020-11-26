<?php
//echo 'get join form php ....';
$tbjoin="Register";
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'Sports_club');
$db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD);
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
mysqli_select_db($db,$DB_DATABASE);
$sql="CREATE TABLE Register(".
       "fname TEXT ,".
       "lname  TEXT,".
       "gender TEXT,".
       "email TEXT,".
       "dob TEXT,".
       "contact TEXT,".
       "sports TEXT);";
mysqli_select_db($db,$DB_DATABASE);
$retval = mysqli_query($db,$sql);
if($_SERVER["REQUEST_METHOD"] == "POST") {
  
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$gn=$_POST['gender'];
$em=$_POST['email'];
$dob=$_POST['dob'];
$contact=$_POST['phone'];
$sports=$_POST['sports'];

if ($fn!="" and $ln!="" and $gn!="" and $em!="" and $dob!="" and $contact!="" and $sports!="")
{
  /*echo 'complete data to save...'.
  "<br> fname : ".$fn.
  '<br> lname : '.$ln.
  '<br> gender : '.$gn.
  '<br> dob : '.$dob.
  '<br> contact : '.$contact.
  '<br> sports : '.$sports;*/
mysqli_select_db($db,'Sports_club');
  $sql = " INSERT INTO Register (fname,lname,gender,email,dob,contact,sports) VALUES ('$fn','$ln','$gn','$em','$dob','$contact','$sports');";

     if ($db->query($sql)===TRUE){

      header("location: /index.html");
      exit();
       echo '<br><hr>Data saved';
     }
     else{
       echo '<br>data not saved yet...<br>'.mysqli_error($db);}
}
else{
  echo '<br><h3>incomplete data feild not field...';
$error="Incomplete feilds not allowed.";
}

  
  
}else{}

?>