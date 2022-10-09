<?php
include_once('db.php');
function d($arr)
{

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
function dd($arr)
{

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    die;
}
function get_db_data($ob)
{

     $data=array();

     if ($ob->num_rows > 0) {
        while($row = $ob->fetch_assoc()) {
          $data[]= $row;     
        }
    }
     return $data;

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function get_teacher_by_id($teacher_id)
{
    global $conn;
    $sql =  "SELECT * from teacher WHERE teacher_id=$teacher_id";
    $ob = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($ob);
    return $result;
}
function add_teacher(){

    global $conn;
    $image_name ="";

    $teacher_name = $_POST['teacher_name'];
    $teacher_subject = $_POST['teacher_subject'];
    $image = $_FILES['image']['name'];

if($image!=""){
    $errors= array();
  
    $image_name = $_FILES['image']['name'];
    $tmp = explode(".",$image_name);
    $image_name = $tmp[0]."-".time().".".$tmp[1];
    
    $file_size = $_FILES['image']['size'];
    $file_tmp  = $_FILES['image']['tmp_name'];
    $file_type =  $_FILES['image']['type'];
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
   move_uploaded_file($file_tmp,"teachers_images/".$image_name);
  
       echo "Success";
    }else{
       print_r($errors);
    }
  }

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO teacher (teacher_name, teacher_subject ,image_name)
 VALUES ('$teacher_name', '$teacher_subject', '$image_name')";
 
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    //header("Location: http://localhost/website/teacher.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
function update_teacher($teacher_id){

    global $conn;
    $image_name ="";

    $teacher_name = $_POST['teacher_name'];
    $teacher_subject = $_POST['teacher_subject'];
    $image = $_FILES['image']['name'];

if($image!=""){
    $errors= array();
  
    $image_name = $_FILES['image']['name'];
    $tmp = explode(".",$image_name);
    $image_name = $tmp[0]."-".time().".".$tmp[1];
    
    $file_size = $_FILES['image']['size'];
    $file_tmp  = $_FILES['image']['tmp_name'];
    $file_type =  $_FILES['image']['type'];
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
   move_uploaded_file($file_tmp,"teachers_images/".$image_name);
  
       echo "Success";
    }else{
       print_r($errors);
    }
  }

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE teacher SET teacher_name='$teacher_name' , teacher_subject='$teacher_subject' ,image_name= $image_name WHERE teacher_id=$teacher_id";
 
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
 //   header("Location: http://localhost/website/teacher.php");
}}
function delete_teacher($teacher_id)
{
     global $conn;
    $sql = "DELETE FROM teacher WHERE teacher_id=$teacher_id";
    mysqli_query($conn, $sql);
}
?>