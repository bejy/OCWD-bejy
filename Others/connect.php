<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'cwd');
	
	$id="";
	$residential="";
	$commercial = "";
	$senior = "";
	$pwd = "";
	$penalty = "";
		
	//update1
	if (isset($_POST['update1'])) {
		$residential=$_POST['residential'];
		$commercial= $_POST['commercial'];
		$show = mysqli_query($db, "UPDATE resicom SET residential='$residential', commercial='$commercial' WHERE id=$id");
		echo $show;
		//$_SESSION['message'] = "Updated!"; 
		//header('location: rates.php');
	}
	//update2
	if (isset($_POST['update2'])) {
		$senior=$_POST['senior'];
		$pwd= $_POST['pwd'];
		mysqli_query($db, "UPDATE seniorpwd SET senior='$senior', pwd='$pwd' WHERE id=$id");
		$_SESSION['message'] = "Updated!"; 
		header('location: rates.php');
	}
	//update3
	if (isset($_POST['update3'])) {
		$residential=$_POST['penalty'];
		mysqli_query($db, "UPDATE penalty SET penalty='$penalty' WHERE id=$id");
		$_SESSION['message'] = "Updated!"; 
		header('location: rates.php');
	}
	

?>