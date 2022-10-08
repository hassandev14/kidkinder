<?php
$servername = "localhost";
$database = "website";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

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
?>