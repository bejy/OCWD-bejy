<?php include('server11.php');?>

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
<form method="post" action="payment1.php"/>
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
	  <div class="row">
		<div class="col-md-12">
			<ul class="navbar-nav nav-flex-icons">
			    <li class="nav-item">
					<a class="nav-link" href="login.php">Logout</a>
				</li>
			</ul>
		</div>
		</div>

	 
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
        <a href="payment.php">
          <span class="circle">P</span>
          <span class="label">Payment</span>
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
				<input class="form-control mr-sm-5" type="text" name="valueToSearch" placeholder="Billing Number" aria-label="Search">
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
<table width="500px" border="2px">
<td>
<center>
<table width="95%" style="margin:20px">
<td>
    <?php if($row = mysqli_fetch_array($search_result)) { ?>
	<input type="hidden" name="billing_id" value="<?php echo $row['billing_id'];?>">
	<input type="hidden" name="account_no" value="<?php echo $row['account_no'];?>">
	<div class="form-row">
		<div class="col-md-4">
			<label>Billing ID </label>
			<input  class="form-control form-control-lg" type="text" name="billing_id" value="<?php echo $row['billing_id']; ?>"readonly/>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<label>Account No.  </label>

			<input  class="form-control form-control-lg" type="text" name="account_no" value="<?php echo $row['account_no']; ?>"readonly/>
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
			<div class="col-md-4">
				<label>Previous Reading  </label>
					<h4><label for="previous_reading"><?php echo $row['previous_reading']; ?></label></h4>
			</div>
				<div class="col-md-4">
				<label>Present Reading   </label>
					<h4><label for="present_reading"><?php echo $row['present_reading']; ?></label></h4>
			</div>
	</div>
	<div class="form-row">
		<div class="col-md-5">
			<label>Date Payed </label>
			<input class="form-control form-control-lg" type="date" name="datepayed">
		</div>
		<div class="col-md-5">
			<label>Mode of Payment</label>
				<select name="modeofpayment" class="form-control form-control-lg">
					<option value="cash">Cash</option>
					<option value="check">Check</option>
				</select> 
		</div><br>

	</div><br>
		<div class="form-row">
			<div class="col-md-6">
			<label>Amount </label>
			 <h1><?php echo '₱'.($row['present_reading']-$row['previous_reading'])*($row['commercial']/10);?></h1>

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
						<input class="btn btn-info btn-rounded btn-sm buttonEdit" type="submit" name="addpayment1" value="Add">


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
