<?php
if(isset($_POST['submit'])){
$name=$_POST['username'];
$number=$_POST['number'];
$password=$_POST['password'];
$email=$_POST['email'];




$con=mysqli_connect("localhost","root","");
     if($con){
         echo "connection successful";
     }
     else{
         echo "connection fail";
     }

     mysqli_select_db($con,'mystore');

   


    // $q="select * from user_data where email='$email' && number='$number'";

    // $result=mysqli_query($con,$q);

    // $num=mysqli_num_rows($result);

    // if($num == 1){
    //     echo "duplicate";
    // }

   // else{
        $qy=" insert into myuser (name,password,number,email) values ('$name','$password','$number','$email') ";
        mysqli_query($con,$qy) or die("query fail");
        mysqli_close($con);
   // } 
 }

?>

<html>
     <head>
     </head>
     <body>
          <a href="index.html">click here to move on home page</a>
     </body>
</html>






