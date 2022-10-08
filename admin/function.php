<?php
include('db.php');

$teacher_name = $_POST['teacher_name'];
$teacher_subject = $_POST['teacher_subject'];
$image = $_FILES['image']['name'];

if(isset($_FILES['image'])){
    $errors= array();
  
    $file_name = $_FILES['image']['name'];
    $tmp = explode(".",$file_name);
    $file_name = $tmp[0]."-".time().".".$tmp[1];
    
    $file_size = $_FILES['image']['size'];
    $file_tmp  = $_FILES['image']['tmp_name'];
    $file_type =  $_FILES['image']['type'];
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
   move_uploaded_file($file_tmp,"teachers_images/".$file_name);
  
       echo "Success";
    }else{
       print_r($errors);
    }
  }

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO teacher (teacher_name, teacher_subject ,image_name)
 VALUES ('$teacher_name', '$teacher_subject', '$file_name')";
 
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    header("Location: http://localhost/website/teacher.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>