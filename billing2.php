<?php
include('server.php');

		$record = mysqli_query($db, "SELECT consumer1.account_no, consumer1.fname, consumer1.mname, consumer1.lname, consumer1.streetname, consumer1.barangayname, consumer1.cityname, billing.b_id, billing.billing_id, billing.present_reading, billing.previous_reading, billing.due_date, billing.cutting_date, billing.bill_amount FROM consumer1 JOIN billing WHERE consumer1.account_no=billing.account_no ");
			$n = mysqli_fetch_array($record);
			$billing_id=$n['billing_id'];
			$account_no=$n['account_no'];
			$previous_reading= $n['previous_reading'];
			$present_reading= $n['present_reading'];
			$due_date= $n['due_date'];
			$cutting_date= $n['cutting_date'];
			$bill_amount= $n['bill_amount'];
			$fname= $n['fname'];
			$mname=$n['mname'];
			$lname= $n['lname'];
			$streetname=$n['streetname'];
			$barangayname= $n['barangayname'];
			$cityname=$n['cityname'];
			$b_id=$n['b_id'];
			


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>WD</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

</head>
<body>
<form method="post" action="server.php"/>
<!--Main Navigation-->
<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar">
    <a class="navbar-brand" href="#"><strong>Water District</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="billing.php">Billing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="payment.php">Payment</a>
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
  <div class="col-md-12">
    <ul class="stepper stepper-horizontal">
      <li>
      </li>
      <li class="active">
        <a href="consumer1.php">
          <span class="circle">B</span>
          <span class="label">Billing</span>
        </a>
      </li>
      <li>
      </li>
    </ul>
  </div>
</div>

<center>
<table width="700px">
<td>
	<input type="hidden" name="b_id" value="<?php echo $b_id; ?>">
	<div class="form-row">
		<div class="col-md-6">
			<label>Billing ID </label>
			<h4><label for="billing_id"><?php echo $billing_id; ?></label></h4>
		</div>
		<div class="col-md-6">
			<label>Account No.  </label>
			<h4><label for="account_no"><?php echo $account_no; ?></label></h4>
		</div>
	</div>	
	<div class="form-row">
		<div class="col-md-8">
			<label>Name: </label>
			<h4><label for="name"><?php echo ucwords($fname . " " . $mname . " ". $lname) ; ?></label></h4>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-12">
			<label>Address  </label>
			<h3><label for="address"><?php echo ucwords($streetname . " " . $barangayname . " ". $cityname ); ?></label></h3>
		</div>
	</div>	
		<div class="form-row">
				<div class="col-md-4">
			<label>Previous Reading </label>
			<h3><label for="previous_reading"><?php echo $previous_reading; ?></label></h3>
		</div >
		<div class="col-md-4">
			<label>Present Reading  </label>
			<input  class="form-control form-control-lg" type="text" name="present_reading"/>
		</div>
	</div>
	
	<div class="form-row">
		<div class="col-md-2.5">
			<label>Due Date </label>
			<input  class="form-control form-control-lg" type="date" name="due_date"/></br>
		</div>
		<div class="col-md-2.5">
			<label>Cutting Date </label>
			<input  class="form-control form-control-lg" type="date" name="cutting_date"/></br>
		</div>
	</div>
	<div class="form-row">
	<div class="col-md-2.5">
			<label>Amount </label>
			<input  class="form-control form-control-lg" type="number" name="bill_amount"/></br>
	</div>
	</div>
	<div class="form-row">
			</br>
			<div class="col-md-3">
			<input class="btn btn-info btn-rounded btn-sm" type="submit" name="addbill" value="Add"></br></br></br>
		</div></br></br></br>
	</div>
</td>
</table>
</center>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
</body>
</html>



