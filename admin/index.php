<?php
session_start();
if(isset($_SESSION['admin']))
{

    header("Location:login.php");
}?>

<?php include_once('header.php');?>
<?php include_once('menu.php');?>
<?php include_once('teachers.php');?>
<?php include_once('footer.php');?>
