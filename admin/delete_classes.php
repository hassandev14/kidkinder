<?php
include "function.php";
if(isset($_REQUEST["classes_id"]))
{
    $classes_id = $_REQUEST["classes_id"];
    $ob = delete_calsses($classes_id);
    header("Location:clsses.php");
}
?>