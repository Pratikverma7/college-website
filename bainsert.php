<?php
include('connection.php');
if (isset($_POST['submit'])) 
{
	$papername=$_POST['papername'];
	$teacher = $_POST['teacher'];
	$code = $_POST['code'];
	$course = $_POST['course'];

	$pdf=$_FILES['pdf']['name'];
 	$tmpname=$_FILES['pdf']['tmp_name'];
 	$file ="pdf/".$pdf;
 	move_uploaded_file($tmpname, $file);
    
    $query = "INSERT INTO barevised(papername,teacher,code,course,pdf)VALUES('$papername','$teacher','$code','$course','$file')";
    $data=mysqli_query($db,$query);
    if($data)
    {
    	header('location:barevised.php');
    }
}

?>