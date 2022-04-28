<?php
if(isset($_POST['email']) && $_POST['email']!=''){
    require('connection.php');
    require('functions.php');
    $donor=$_SESSION['USER_ID'];
    $title=get_safe_value($con,$_POST['title']);
    $des=get_safe_value($con,$_POST['description']);
    $email=get_safe_value($con,$_POST['email']);
    $contact=get_safe_value($con,$_POST['contact']);
    $location=get_safe_value($con,$_POST['location']);
    date_default_timezone_set("Asia/Kolkata");
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"INSERT INTO `donations`(`id`, `title`, `des`, `email`, `contact`, `location`, `donor`,`taken_by`, `added_on`, `status`) VALUES (NULL,'$title','$des','$email','$contact','$location','$donor',NULL,'$added_on','1')");
    echo"<script>alert('ThankYou for your donation')</script>";
echo"<script>window.location.href='donor.php'</script>";
}