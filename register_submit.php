<?php
if(isset($_POST['email']) && $_POST['email']!=''){
    require('connection.php');
    require('functions.php');

    $email=get_safe_value($con,$_POST['email']);
    $name=get_safe_value($con,$_POST['name']);
    $role=get_safe_value($con,$_POST['role']);
    $pass=get_safe_value($con,$_POST['pass']);
    date_default_timezone_set("Asia/Kolkata");
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"INSERT INTO `users`(`id`, `email`,`name`, `pass`, `role`, `status`, `added_on`) VALUES (NULL,'$email','$name','$pass','$role','1','$added_on')");
    echo"<script>alert('User registered, login to continue')</script>";
echo"<script>window.location.href='index.html'</script>";
}