<?php include('server.php')?>;
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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<form method="post" action="consumer.php"/>

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
 </header></br>
 <div class="row">
  <div class="col-md-12">
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
<table width="300px">
<td>
	<div class="form-row">
		<div class="col-md-7">
			<input  placeholder="Enter Billing ID"class="form-control form-control-sm" type="text" name="account_no" required="required"/>
		</div>
		<div class="col-md-3">
				<label>Billing ID</label>
		</div>
	</div><br>
	<div class="form-row">
			<div class="col-md-7">
				<input class="form-control form-control-sm" type="date" name="datepayed" required="required"/>
			</div>
			<div class="col-md-2.5">
				<label>Date Payed</label>
			</div>
	</div><br>
	<div class="form-row">	
		<div class="col-md-7">
			<select class="form-control form-control-sm" name="mode">
				<option value="residential">Cash</option>
					<option value="commercial">Check</option>>
			</select>
		</div>
		<div class="col-md-2.5">
			<label>Mode of Payment</label>
		</div>
	</div>
</table>
</center><br></br>
<center>
<table width="500px" border="2px">  
<td>
<center>
<?php $results = mysqli_query($db, "SELECT * FROM payment JOIN consumer1 WHERE 'payment.account_no'='consumer.account_no'"); ?>
<table width="400px" style="margin:25px" > 
<td>
 <?php while ($row = mysqli_fetch_array($db, $results)) { ?>
	<div class="form-row">
		<div class="col-md-3">
			<label>Receipt No.</label>
			<label><td><?php echo $row['receipt_no']; ?></label>
		</div>	
		<div class="col-md-3">
			<label></label>
		</div>
		<div class="col-md-3">
			<label></label>
		</div>
	<div class="col-md-3">
			<label>Billing ID </label>
			<input  class="form-control form-control-sm" type="text" name="billin_id" required="required"/></br>
		</div>

	</div>	
	<div class="form-row">
		<div class="col-md-7">
			<label>Name  </label>
			<td><?php echo ucwords($row['fname']. "  " .$row['mname']. " " .$row['lname']); ?></td>
		</div>
		<div class="col-md-2">
			<label></label>
		</div>

		<div class="col-md-3">
			<label>Account No </label>
			<td><?php echo $row['account_no']; ?></td>
		</div>
	</div>	
	<?php } ?>	
<table class="table table-bordered">
  <thead>
		<th></th>
  </thead>
  <tbody>
    <tr>
      <th>Senior Discount</th>
      <th>₱ 10</th>
    </tr>
    <tr>
      <th>PWD Discounts</th>
      <th>₱ 10</th>
    </tr>
	<tr>
      <th>Date Payed</th>
      <th>April</th>
    </tr>
	<tr>
      <th>Mode of Payment</th>
      <th>Cash</th>
    </tr>
	<tr>
      <th>Amount</th>
      <th>₱ 1000</th>
    </tr>
	</tbody>

</td>
</table>


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
