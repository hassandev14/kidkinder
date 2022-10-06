<?php
include('db.php');

$teacher_name = $_POST['teacher_name'];
$teacher_subject = $_POST['teacher_subject'];
$image = $_FILES['image']['name'];

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO teacher (teacher_name, teacher_subject ,image_name) VALUES ('$teacher_name', '$teacher_subject', '$image')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    header("Location: http://localhost/website/teacher.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>