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
function get_single_data($ob)
{
     $data=array();
     if ($ob->num_rows > 0) {
        $data = $ob->fetch_assoc();	
    }
     return $data;

}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++login start here++++++++++++++++++++++++++++++++++++++++++++++++++++++++//
function get_admin_data()
{ 
    global $conn;
    $username="";
    $ob_data = $conn->query("select * from admin");
    $result = mysqli_fetch_assoc($ob_data);
    return $result;
}
function login($username,$password)
{ 
    global $conn;
     $sql = "select * from admin where username='$username' and password='$password'";
    $ob_data = $conn->query($sql);
    $result = mysqli_fetch_assoc($ob_data);
    return $result;
}
function add_admin()
{
    global $conn;
    $username="";
    //dd($_REQUEST);
    $name        =   $_POST['name'];
    $username    =   $_POST['username'];
    $password    =   $_POST['password'];
    $password    =   md5($password);

     $sql = "INSERT INTO admin SET `name`='$name', username ='$username', `password`='$password '";
    mysqli_query($conn, $sql);
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++login end here++++++++++++++++++++++++++++++++++++++++++++++++++++++++//

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++teacher start here++++++++++++++++++++++++++++++++++++++++++++++++++++++++//
function get_teacher_by_id($teacher_id)
{
    global $conn;
    $sql =  "SELECT * from teacher WHERE teacher_id=$teacher_id";
    $ob = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($ob);
    return $result;
}
function add_teacher()
{
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
function update_teacher($teacher_id)
{
    global $conn;
    $image_name ="";
   //dd($_REQUEST);
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

echo $sql = "UPDATE teacher SET teacher_name='$teacher_name' , teacher_subject='$teacher_subject' ,image_name= '$image_name' WHERE teacher_id=$teacher_id";
 
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
 //   header("Location: http://localhost/website/teacher.php");
}
}
function delete_teacher($teacher_id)
{
     global $conn;
    $sql = "DELETE FROM teacher WHERE teacher_id=$teacher_id";
    mysqli_query($conn, $sql);
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++teacher end here++++++++++++++++++++++++++++++++++++++++++++++++++++++++//

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++classes start here++++++++++++++++++++++++++++++++++++++++++++++++++++++++//
function get_classes_by_id($classes_id)
{
    global $conn;
    $sql =  "SELECT * from classes WHERE classes_id=$classes_id";
    $ob = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($ob);
    return $result;
}
function add_classes()
{

    global $conn;
    $image_name ="";

    $title = $_POST['title'];
    $desc = ($_POST['desc']=='')? NULL: $_POST['desc'];
    $age =  ($_POST['age']=='')? NULL: $_POST['age'];
    $seats = ($_POST['seats']='')? NULL : $_POST['seats'];
    $time = ($_POST['time']=='')? NULL : $_POST['time'];
    $tution_fee = ($_POST['tution_fee']='')? NULL : $_POST['time'];
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
   move_uploaded_file($file_tmp,"classes_images/".$image_name);
  
       echo "Success";
    }else{
       print_r($errors);
    }
  }
  
   echo $sql = "INSERT INTO classes SET title='$title' , `desc`='$desc' ,age= '$age',seats='$seats' , 
  `time`='$time' , tution_fee= '$tution_fee', image_name= '$image_name'";
 
     mysqli_query($conn, $sql);
     //header("Location: http://localhost/website/admin/classes.php");
}
function update_classes($classes_id)
{
    global $conn;
    $image_name ="";
   //dd($_REQUEST);
   $title = $_POST['title'];
   $desc = $_POST['desc'];
   $age = $_POST['age'];
   $seats = $_POST['seats'];
   $time = $_POST['time'];
   $tution_fee = $_POST['tution_fee'];
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
   move_uploaded_file($file_tmp,"classes_images/".$image_name);
  
       echo "Success";
    }else{
       print_r($errors);
    }
  }

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

echo $sql = "UPDATE classes SET title='$title' , `desc`='$desc' ,age= '$age',seats='$seats' , 
`time`='$time' , tution_fee= '$tution_fee', image_name= '$image_name' WHERE classes_id=$classes_id";
 
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
 //   header("Location: http://localhost/website/teacher.php");
}
}
function delete_calsses($classes_id)
{
     global $conn;
    $sql = "DELETE FROM classes WHERE classes_id=$classes_id";
    mysqli_query($conn, $sql);
}
///++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  classess end here ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//

///++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  contact start here ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//
if(isset($_REQUEST["update_contact"]))
{
    
    $contact_id = $_REQUEST["contact_id"];
    $ob = update_contact_us($contact_id);
}
function get_contact_by_id()
{
    global $conn;
    $sql =  "SELECT * FROM contact_us WHERE contact_id=1";
    $ob = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($ob);
    return $result;
}
function update_contact_us($contact_id)
{
    global $conn;
    $image_name ="";

   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $desc = $_POST['desc'];
   $opening_hour = $_POST['opening_hour'];

  echo $sql = "UPDATE contact_us SET address='$address',  `desc`='$desc', `email`='$email', phone= '$phone',
  opening_hour='$opening_hour' WHERE contact_id=$contact_id";
 
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
 //   header("Location: http://localhost/website/teacher.php");
}
}
?>