<?php
require('connection.php');
require('functions.php');

    unset($_SESSION['USER_LOGIN']);
    unset($_SESSION['USER_ID']);
    unset($_SESSION['USER_MAIL']);
    unset($_SESSION['USER_ROLE']);
    echo "<script>window.location.href='index.html'</script>";
    die();
?>