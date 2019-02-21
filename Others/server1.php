<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// initialize variables
	$name = "";
	$address= "";
	$phonenum = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phonenum = $_POST['phonenum'];
		mysqli_query($db, "INSERT INTO contact (name, address, phonenum) VALUES ('$name', '$address', '$phonenum')"); 
		$_SESSION['message'] = "Saved"; 
		header('location: welcome.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phonenum = $_POST['phonenum'];

		mysqli_query($db, "UPDATE contact SET name='$name', address='$address' ,phonenum='$phonenum' WHERE id=$id" );
		$_SESSION['message'] = "Updated!"; 
		header('location: welcome.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM contact WHERE id=$id");
	$_SESSION['message'] = "Deleted!"; 
	header('location: welcome.php');
}


	$results = mysqli_query($db, "SELECT * FROM contact");

	
?>
