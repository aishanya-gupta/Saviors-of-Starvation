<?php
require('connection.php');
require('functions.php');

$email=get_safe_value($con,$_POST['email']);
$pass=get_safe_value($con,$_POST['pass']);
$res=mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`email`='$email' and `users`.`pass`='$pass'");
$check_user=mysqli_num_rows($res);

if($check_user>0){
    $row=mysqli_fetch_assoc($res);
    $_SESSION['USER_LOGIN']='yes';
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['USER_MAIL']=$row['email'];
    $_SESSION['USER_ROLE']=$row['role'];
    if($_SESSION['USER_ROLE']=='1'){
    echo"<script>window.location.href='ngo.php'</script>";
    }else{
    echo"<script>window.location.href='donor.php'</script>";
    }

    // if(!isset($_SESSION['WISHLIST_ID']) && $_SESSION['WISHLIST_ID']!=''){
    //     $added_on=date('Y-m-d h:i:s');
    //  mysqli_query($con,"INSERT INTO `wishlist` (`user_id`, `product_id`, `added_on`) VALUES ('$_SESSION['USER_ID']','$_SESSION['WISHLIST_ID']','$added_on')");
    // }

    
}else{
echo"<script>alert('User not found, Please try again!')</script>";
echo"<script>window.location.href='index.html'</script>";
}
?>