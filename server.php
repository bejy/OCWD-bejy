<?php
	session_start();

	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'cwd');

	// initialize variables
	$consumer_id="";
	$account_no="";
	$fname = "";
	$mname = "";
	$lname = "";
	$bdate = "";
	$bplace = "";
	$cstatus = "";
	$cnum = "";
	$occupation = "";
	$momname = "";
	$momname = "";
	$dadname = "";
	$spousename = "";
    $streetname="";
	$barangayname= "";
	$cityname = "";
	$resicom = "";
	$pubpriv = "";
	$senior = "";
	$pwd = "";
	$monthincome = "";
	$dateinstalled = "";
	$meterbrandno = "";
	$initread = "";
	$update = false;


    //consumer1
	if (isset($_POST['add'])) {
		$account_no=$_POST['account_no'];
		$fname= $_POST['fname'];
		$mname=$_POST['mname'];
		$lname= $_POST['lname'];
		$bdate=$_POST['bdate'];
		$bplace= $_POST['bplace'];
		$cstatus=$_POST['cstatus'];
		$cnum= $_POST['cnum'];
		$occupation = $_POST['occupation'];
		$momname=$_POST['momname'];
		$dadname= $_POST['dadname'];
        $spousename = $_POST['spousename'];
		$streetname=$_POST['streetname'];
		$barangayname= $_POST['barangayname'];
		$cityname=$_POST['cityname'];
		$resicom= $_POST['resicom'];
		$pubpriv=$_POST['pubpriv'];
		$senior= $_POST['senior'];
		$pwd=$_POST['pwd'];
		$monthincome= $_POST['monthincome'];
		$dateinstalled = $_POST['dateinstalled'];
		$meterbrandno=$_POST['meterbrandno'];
		$initread= $_POST['initread'];
		mysqli_query($db, "INSERT INTO consumer1 (account_no, fname, mname, lname, bdate, bplace, cstatus, cnum, occupation, momname, dadname, spousename, streetname, barangayname, cityname, resicom, pubpriv, senior, pwd, monthincome, dateinstalled, meterbrandno, initread) VALUES ('$account_no', '$fname', '$mname', '$lname', '$bdate', '$bplace', '$cstatus', '$cnum', '$occupation', '$momname', '$dadname', '$spousename', '$streetname', '$barangayname', '$cityname', '$resicom', '$pubpriv', '$senior', '$pwd', '$monthincome', '$dateinstalled', '$meterbrandno', '$initread')"); 
		$_SESSION['message'] = "Saved"; 
		header('location: index.php');
	}

	//Update
	if (isset($_POST['update'])) {
		$consumer_id = $_POST['consumer_id'];
		$account_no=$_POST['account_no'];
		$fname= $_POST['fname'];
		$mname=$_POST['mname'];
		$lname= $_POST['lname'];
		$bdate=$_POST['bdate'];
		$bplace= $_POST['bplace'];
		$cstatus=$_POST['cstatus'];
		$cnum= $_POST['cnum'];
		$occupation = $_POST['occupation'];
		$momname=$_POST['momname'];
		$dadname= $_POST['dadname'];
        $spousename = $_POST['spousename'];
		$streetname=$_POST['streetname'];
		$barangayname= $_POST['barangayname'];
		$cityname=$_POST['cityname'];
		$resicom= $_POST['resicom'];
		$pubpriv=$_POST['pubpriv'];

		$monthincome= $_POST['monthincome'];
		$dateinstalled = $_POST['dateinstalled'];
		$meterbrandno=$_POST['meterbrandno'];
		$initread= $_POST['initread'];
		$update = "UPDATE consumer1 SET account_no='$account_no', fname='$fname' , mname='$mname', lname='$lname', bdate='$bdate', bplace='$bplace', cstatus='$cstatus', cnum='$cnum', occupation='$occupation', momname='$momname', dadname='$dadname', spousename='$spousename', streetname='$streetname', barangayname='$barangayname', cityname='$cityname', resicom='$resicom', pubpriv='$pubpriv', senior='$senior', pwd='$pwd', monthincome='$monthincome', dateinstalled='$dateinstalled', meterbrandno='$meterbrandno', initread='$initread' WHERE consumer_id=$consumer_id";
		mysqli_query($db,$update  );
		$_SESSION['message'] = "Updated!";
		header('location: index.php');
	}

	//Delete
	if (isset($_GET['delete'])) {
		$consumer_id = $_GET['delete'];
		$delete =  "DELETE FROM consumer1 WHERE consumer_id= $consumer_id";
		mysqli_query($db,$delete  );
		$_SESSION['message'] = "Deleted!";
		header('location: index.php');
	}


	$results = mysqli_query($db, "SELECT * FROM instructor");


?>
