<?php
//echo 'sign up php';
include("config_db.php");
$db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD);
mysqli_select_db($db,'Sports_club');


$fn=$_POST['Fname'];
$mn=$_POST['Mname'];
$ln=$_POST['Lname'];
$em=$_POST['Email'];
$uss=$_POST['Username'];
$pswd=$_POST['Password'];
//echo 'Sign up php work ';

if ($fn!=="" and $ln!="" and $mn!="" and $em!="" and $uss!="" and $pswd!="")
{
  /*echo '<hr>Fname : '.$fn

     .'<br>Mname : '.$mn.

     '<br>Lname : ',$ln.
     '<br>Email :'.$em.
     '<br>Username : '.$uss.
     '<br>Password : '.$pswd;*/
     
  $sql = " INSERT INTO Login_cred  (fname,mname,lname,email,username,password) VALUES ('$fn','$mn','$ln','$em','$uss','$pswd');";
     if ($db->query($sql)===TRUE){
       header("location: login.html");
         exit();
       //echo '<br><hr>Data saved';
     }
     else{
       echo 'data not saved yet...';
       echo 'complete form required to save.';
       $fn="";
       $mn="";
       $ln="";
       $em='';
       $uss='';
       $pswd='';
       
     }
}
else{
  
header("location: signup.html");
//echo '<br><hr>Incomplete data ';
$msg="Incomplete feilds not allowed.";
$msgg=json_decode(base64_decode($msg));
echo 'alert("String $a: + '.$msg.$msgg.'");';
exit();
}
     



?>
