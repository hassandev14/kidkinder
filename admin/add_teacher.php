<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<?php

if(isset($_FILES['image'])){
  $errors= array();

  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp  = $_FILES['image']['tmp_name'];
  $file_type =  $_FILES['image']['type'];
  
  
  if($file_size > 2097152){
     $errors[]='File size must be excately 2 MB';
  }
  
  if(empty($errors)==true){
  print_r($image_name =  move_uploaded_file($file_tmp,"teachers_images/".$file_name));

     echo "Success";
  }else{
     print_r($errors);
  }
}
?>
<form action="function.php" style="border:1px solid #ccc" enctype="multipart/form-data" method="POST">
  <div class="container">
    <h2>Add Teacher Detail.</h2>
    <hr>

    <label for="Teacher Name"><b>Teacher Name</b></label>
    <input type="text" placeholder="Enter Teacher Name" name="teacher_name">

    <label for="Teacher Subject"><b>Teacher Subject</b></label>
    <input type="text" placeholder="Enter Teacher Subject" name="teacher_subject">

    <label for="Image"><b>Add Image</b></label>
    <input type="file" placeholder="Add Image" name="image" >
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>

</body>
</html>
