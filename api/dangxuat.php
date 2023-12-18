<?php
    session_start();
    if(isset($_SESSION['mySession']))
    {
      unset($_SESSION['mySession']);
    } 
    header("location: http://localhost/181A020029/dangnhap.php");
?>
