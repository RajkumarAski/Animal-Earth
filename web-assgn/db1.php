<?php
// $login=false;
// logic for login
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//  
    include 'db.php';
//     $email2=$_POST['email2'];
//     $password2=$_POST['password2'];

     
// // logic for login
// $aemail=$_POST['emaila'];
// $apassword=$_POST['passworda'];
// $sql="SELECT * FROM `user` WHERE email_id='$aemail' AND password='$apassword'";
// $result=mysqli_query($connection,$sql);
// $num=mysqli_num_rows($result);
// if($num==1){
//     // echo "login succses";
//     header('location:userform.html');

// }else{
//     echo "login failed";
// }

$aemail=$_POST['emaila'];
$apassword=$_POST['passworda'];
$sql="SELECT * FROM `user` WHERE email_id='$aemail' AND password='$apassword'";
$result=mysqli_query($connection,$sql);
// header("location:login.html");
//$row=mysqli_fetch_assoc($result)
$num=mysqli_num_rows($result);
if($num==1){
    // $login=true;
    // session_start();
    // $_SESSION["logedin"]=true;
    // $_SESSION["username"]=$name;
    header("location:userform.html");

}
else{
    header('location:fail.html');
    
}
// }

?>
