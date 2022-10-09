<?php
include "function.php";
if(isset($_REQUEST["teacher_id"]))
{
    $teacher_id = $_REQUEST["teacher_id"];
    $ob = delete_teacher($teacher_id);
    header("Location:teachers.php");
}
?>