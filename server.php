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


    //ADD
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
		header('location: home.php');
	}

	//UPDATE
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
		$senior=$_POST['senior'];
		$pwd=$_POST['pwd'];
		$monthincome= $_POST['monthincome'];
		$dateinstalled = $_POST['dateinstalled'];
		$meterbrandno=$_POST['meterbrandno'];
		$initread= $_POST['initread'];
		$update = "UPDATE consumer1 SET account_no='$account_no', fname='$fname' , mname='$mname', lname='$lname', bdate='$bdate', bplace='$bplace', cstatus='$cstatus', cnum='$cnum', occupation='$occupation', momname='$momname', dadname='$dadname', spousename='$spousename', streetname='$streetname', barangayname='$barangayname', cityname='$cityname', resicom='$resicom', pubpriv='$pubpriv', senior='$senior', pwd='$pwd', monthincome='$monthincome', dateinstalled='$dateinstalled', meterbrandno='$meterbrandno', initread='$initread' WHERE consumer_id='$consumer_id'";
		mysqli_query($db,$update  );
		header('location: home.php');
	}


		
	//Delete 
	if (isset($_GET['delete'])) {
		$consumer_id = $_GET['delete'];
		$delete =  "DELETE FROM consumer1 WHERE consumer_id= $consumer_id";
		mysqli_query($db,$delete  );
		$_SESSION['message'] = "Deleted!";
		header('location: home.php');
	}

	//AccountBilling
	if (isset($_POST['addbill'])) {
		$account_no=$_POST['account_no'];
		$previous_reading=$_POST['previous_reading'];
		$present_reading=$_POST['present_reading'];
		$due_date=$_POST['due_date'];
		$cutting_date=$_POST['cutting_date'];
		$query = "INSERT INTO billing (account_no, previous_reading, present_reading,due_date, cutting_date) VALUES ('$account_no', '$previous_reading', '$present_reading', '$due_date','$cutting_date')";
		mysqli_query($db,$query );
		header('location: bill_print.php');
	}
		
	//SearchAccountnumber	
	if(isset($_POST['search']))
	{
    	$valueToSearch = $_POST['valueToSearch'];

   		$query = "SELECT * FROM consumer1 WHERE consumer1.account_no LIKE '%$valueToSearch' ";
   		$search_result = filterTable($query);
    
	}
	else {
    	$query = "SELECT consumer1.account_no, consumer1.fname, consumer1.mname, consumer1.lname, consumer1.streetname, consumer1.barangayname, consumer1.cityname, billing.billing_id, billing.present_reading, billing.previous_reading, billing.due_date, billing.cutting_date FROM consumer1 JOIN billing WHERE 'consumer1.account_no'='billing.account_no' ";
    	$search_result = filterTable($query);
	}

		function filterTable($query)
	{
   		$connect = mysqli_connect("localhost", "root", "", "cwd");
    	$filter_Result = mysqli_query($connect, $query);
    	return $filter_Result;
	}
	
	
	//Login
	if (isset($_POST['login_user'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
			$password = md5($password);
			$query = "SELECT * FROM login WHERE name='$name' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['name'] = $username;
				header('location: home.php');
			}else {
				
			 echo "Invalid Username or Password!";
			
		}
	}
		
     //UpdatePassword
		if(isset($_POST['passwordup']))
		{
			
		$old_pass=md5($_POST['old_pass']);
		$new_pass=md5($_POST['new_pass']);
		$re_pass=md5($_POST['re_pass']);
		$chg_pwd=mysql_query("select * from login where id='4'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
			
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update login set password='$new_pass' where id='4'");
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your Old Password is Wrong'); window.location='index.php'</script>";
		}}
     


	

?>
