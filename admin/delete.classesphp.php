<?php
include "function.php";
if(isset($_REQUEST["classes_id"]))
{
    $classes_id = $_REQUEST["classes_id"];
    $ob = delete_classes($classes_id);
    header("Location:classes.php");
}
?>