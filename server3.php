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
	$billing_id="";
	$previous_reading="";
	$present_reading="";
	$due_date="";
	$cutting_date="";
	$bill_amount="";
	$b_id="";
	$output = "";
	$name="";
	$password="";
	$errors = array(); 
	$update = false;


	//AccountBilling
	if (isset($_POST['addbill'])) {
		$billing_id=$_POST['billing_id'];
		$previous_reading=$_POST['previous_reading'];
		$present_reading=$_POST['present_reading'];
		$due_date=$_POST['due_date'];
		$cutting_date=$_POST['cutting_date'];
		$query = "UPDATE billing SET previous_reading='$previous_reading' ,present_reading='$present_reading',due_date='$due_date',cutting_date='$cutting_date' WHERE billing_id='$billing_id'";
		mysqli_query($db,$query );
		header('location: bill_print.php');
	}
	
		
	//SearchAccountnumber	
	if(isset($_POST['search']))
	{
    	$valueToSearch = $_POST['valueToSearch'];

   		$query = "SELECT * FROM consumer1,billing WHERE consumer1.account_no LIKE '%$valueToSearch' AND billing.account_no LIKE '%$valueToSearch'";
   		$search_result = filterTable($query);
    
	}
	else {
    	$query = "SELECT consumer1.account_no, consumer1.fname, consumer1.mname, consumer1.lname, consumer1.streetname, consumer1.barangayname, consumer1.cityname, billing.account_no, billing.billing_id, billing.present_reading, billing.previous_reading, billing.due_date, billing.cutting_date FROM consumer1 JOIN billing WHERE consumer1.account_no='$account_no' AND billing.account_no='$account_no' AND billing.billing_id='$billing_id'  ";
    	$search_result = filterTable($query);
	}

		function filterTable($query)
	{
   		$connect = mysqli_connect("localhost", "root", "", "cwd");
    	$filter_Result = mysqli_query($connect, $query);
    	return $filter_Result;
	}
	
		


?>
