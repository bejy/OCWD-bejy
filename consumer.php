<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'cwd');

	// initialize variables
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
	if (isset($_POST['next1'])) {
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
		header('location: consumer1.php');
	}

	//search
    if (isset($_POST['query'])) {    
        $raw_results = mysql_query("SELECT * FROM consumer1 WHERE (`account_no` LIKE '%".$query."%')") or die(mysql_error());     
        if(mysql_num_rows($raw_results) > 0){ 
            while($results = mysql_fetch_array($raw_results)){
                echo "<p><h3>".$results['account_no']."</h3>".$results['text']."</p>";
            }          
        }
        else{
            echo "No results";
        }   
    }
	

	//delete
	if (isset($_POST['del'])) {
	$account_no = $_POST['del'];
	$show = mysqli_query($db, "DELETE FROM consumer1 WHERE account_no=$account_no");
	echo $show;
	header('location: index.php');
	}
?>
