<?php
echo "Hi Rajkumar wellcome to server";
$servername = "localhost";
$username = "root";
$password ="";

$connection = mysqli_connect($servername,$username);

echo "server created succesfull";
mysqli_select_db($connection,'dog_care_centre');



//user table and insertion of data
 $fname=$_POST['first_name'];
 $femail=$_POST['email'];
 $fage=$_POST['age'];
 $fpassword=$_POST['password'];
$data ="INSERT INTO user (name,email_id,age,password) values('$fname','$femail','$fage','$fpassword')";
    $result=mysqli_query($connection,$data);
    header('location:userform.html');
     

//service data form
$fservice=$_POST['service'];
$ftimei=$_POST['timei'];
$ftimeo=$_POST['timeo'];
$fbreed=$_POST['breed'];
$fgender=$_POST['gender'];
$data1 ="INSERT INTO user_data (service,time_in,time_out,breed,gender) values('$fservice','$ftimei','$ftimeo','$fbreed','$fgender')";
    $result=mysqli_query($connection,$data1);
     header('location:succ.html');









?>