<?php 	
if(isset($_POST['search']))
	{
    	$valueToSearch = $_POST['valueToSearch'];

   		$query = "SELECT * FROM consumer1, billing WHERE consumer1.account_no LIKE '%$valueToSearch' AND billing.account_no LIKE '$valueToSearch' ";
   		$search_result = filterTable($query);
    
	}
	else {
    	$query = "SELECT consumer1.account_no, consumer1.fname, consumer1.mname, consumer1.lname, consumer1.streetname, consumer1.barangayname, consumer1.cityname, billing.billing_id, billing.present_reading, billing.previous_reading, billing.due_date, billing.cutting_date FROM consumer1 JOIN billing WHERE 'consumer1.account_no'='billing.account_no'";
    	$search_result = filterTable($query);
	}

		function filterTable($query)
	{
   		$connect = mysqli_connect("localhost", "root", "", "cwd");
    	$filter_Result = mysqli_query($connect, $query);
    	return $filter_Result;
	}
	

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CWD</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<form method="post" action="bill_print.php"/>
<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar">
    <a class="navbar-brand" href="#"><strong>Water District</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="read.php">Billing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="resicom.php">Payment</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Others</a>
		<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item" href="rates.php">Rates/Discounts/Penalties</a>
        </div>
      </li>
	 </ul>
    </div>
  </nav>
</header>
<br>
<div class="row">
  <div class="col-md-11">
    <ul class="stepper stepper-horizontal">
      <li>
      </li>
      <li class="active">
        <a href="bill_print.php">
          <span class="circle">B</span>
          <span class="label">Billing Print</span>
        </a>
      </li>
      <li>
      </li>
    </ul>
  </div>
  </div>
	<center>
	
	<table>

		<td>
		<div class="form-row">
			<div class="col-md-7">
				<input class="form-control mr-sm-5" type="text" name="valueToSearch" placeholder="Account Number" aria-label="Search">
			</div>
			<div class="col-md-5">
				<input class="btn btn-info btn-rounded btn-sm" name="search" type="submit" value="Search">
			</div>
		</div>
	</td>
	</table>
	</center>
	</br>
</div> 

<center>
<br>
<div id="myDIV">
<table width="500px" border="2px">
<td>
<center>
<div id="printThis">
<table width="95%" style="margin:20px">
<td>
    <?php while ($row = mysqli_fetch_array($search_result)) { ?>
	<input type="hidden" name="b_id" value="<?php echo $row['b_id'];?>">
	<div class="form-row">
		<div class="col-md-4">
			<label>Billing ID </label>
			<h4><label for="billing_id"><?php echo $row['billing_id'];?></label></h4>
		</div>
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<label>Account No.  </label>
			<h4><label for="account_no"><?php echo $row['account_no']; ?></label></h4>
		</div>
	</div>	
	<div class="form-row">
		<div class="col-md-8">
			<label>Name: </label>
			<h4><label for="name"><?php echo ucwords($row['fname']. "  " .$row['mname']. " " .$row['lname']); ?></label></h4>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-12">
			<label>Address  </label>
			<h3><label for="address"><?php echo ucwords($row['streetname'].", ".$row['barangayname'].", ".$row['cityname']); ?></label></h3>
		</div>
	</div>	
		<div class="form-row">
			<div class="col-md-5">
			<label>Previous Reading </label>
			<h4><label for="previous_reading"><?php echo $row['previous_reading']; ?></label></h4>
		</div >
		<div class="col-md-5">
			<label>Present Reading  </label>
			<h4><label for="present_reading"><?php echo $row['present_reading']; ?></label></h4>
		</div>
	</div>
	
	<div class="form-row">
		<div class="col-md-5">
			<label>Due Date </label>
			<h4><label for="due_date"><?php echo $date=$row['due_date']; ?></label></h4>
		</div>
		<div class="col-md-5">
			<label>Cutting Date </label>
				<h4><label for="due_date"><?php echo date('Y-m-d', strtotime($date. ' + 5 days')); ?></label></h4>
		</div>
	</div>
	<div class="form-row">
	
	<div class="col-md-6">
			<label>Amount </label>
			<h4><label for="previous_reading" id="previous_reading"><?php echo ($row['present_reading']-$row['previous_reading'])*12; ?></label></h4>
	</div>

	</div>

</div>	

   </td>
  </table>
 </center>

</td>
  </table>
</div>
</div>
 			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<button id="btnPrint" type="button" class="btn btn-info btn-rounded btn-sm" >Print</button>
					</div>
				</div>
			</div>
				
<?php } ?>
  

  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/print.js"></script>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>
