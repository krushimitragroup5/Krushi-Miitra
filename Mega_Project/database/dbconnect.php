<?php 

$con=new mysqli('localhost', 'root', '', 'mega_project');
if(!$con){
    die(mysqli_error($con));
}

?>