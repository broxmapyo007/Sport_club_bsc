<?php
//echo 'working in >';
   include("config_db.php");
  // echo '<hr> login.php<br>';
   $db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD);
   mysqli_select_db($db,'Sports_club');
   //check for row in login if zero row then inse// default data
   $sql='select * from Login_cred;';
   $res=mysqli_query($db,$sql);
   if (!mysqli_fetch_assoc($res)){
 
   $sql = " INSERT INTO Login_cred  (fname,mname,lname,email,username,password) VALUES ('admin','admin','admin','a@b.com','admin'admin');";
     if ($db->query($sql)===TRUE){
        // echo "<br>New default record added successfully";
       } 
   else{
 // echo "<hr>error ".mysqli_error($db);
    }}
    
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    $myusername="";
    $mypassword="";
    $myusername=mysqli_real_escape_string($db,$_POST['username']);
    $mypassword=mysqli_real_escape_string($db,$_POST['password']);
    /*echo '<br>from user >';
    echo '<br> username :'. $myusername;
    echo '<br> password : '. $mypassword;*/
      
      $sql = "SELECT * FROM Login_cred where username='$myusername' and password='$mypassword';";
     // echo '<br> Query check : '.$sql.'<br><hr>';
      $count=0;
      $result = mysqli_query($db,$sql);
      if ($result){
        $row=mysqli_fetch_assoc($result);
        
        if (($row['username']===$myusername) and ($row['password']===$mypassword)){
          $count=1;
          //echo 'checked'.$count;
        }
        else{
          $count=0;
        }
        //echo 'data fetched :'.count($row).' <br> username in db : '.$row['username'].'<br>password in db :'.$row['password'];
      }
      else{
        //echo "no data error : ".mysqli_error($db);
        $count=0;
      }
 
     
     // echo 'count check : '.$count;
      if($count == 1) {
        header("location: /index.html");
        $msg="welcome ...";
         $msgg=json_decode(base64_decode($msg));

    echo 'alert("String $a: + '.$msg.$msgg.'");';
 
         
         exit();
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: signup.html");
         exit();
      }
   }
?>