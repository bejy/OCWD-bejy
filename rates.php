<?php include('connect.php')?>
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
<form method="post" action=""/>
<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark pink scrolling-navbar">
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
          <a class="nav-link" href="#">Billing</a>
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
<div class="row">
  <div class="col-md-12">
    <ul class="stepper stepper-horizontal">
      <li>
      </li>
      <li class="active">
        <a href="rates.php">
          <span class="circle">.</span>
          <span class="label">Rates-Discounts-Penalties</span>
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
	<?php $results = mysqli_query($db, "SELECT * FROM rates"); ?>
	<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">Residential

        </th>
        <th class="th-sm">Commercial

        </th>
		<th class="th-sm">Rate

        </th>
    </thead>
    <tbody>
     <?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['residential']; ?></td>
			<td><?php echo $row['commercial']; ?></td>
			<td>
			
			<div class="row">
				<div class="col-md-3">
					<div class="text-center">
						<input type="submit" name="editi1" class="btn btn-info btn-rounded btn-sm buttonEdit" value="Edit">
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-center">
						<input type="submit" name="del1" class="btn btn-danger btn-sm btn-rounded buttonDelete" value="Delete">
					</div>
				</div>
			</div>
			</td>
		</tr>
    <thead>
      <tr>
        <th class="th-sm">Senior

        </th>
        <th class="th-sm">PWD

        </th>
		<th class="th-sm">Discount

        </th>
    </thead>
    <tbody>
		<tr>
			<td><?php echo $row['senior']; ?></td>
			<td><?php echo $row['pwd']; ?></td>
			<td>
			
			<div class="row">
				<div class="col-md-3">
					<div class="text-center">
						<input type="submit" name="edit2" class="btn btn-info btn-rounded btn-sm buttonEdit" value="Edit">
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-center">
						<input type="submit" name="del2" class="btn btn-danger btn-sm btn-rounded buttonDelete" value="Delete">
					</div>
				</div>
			</div>
			</td>
		</tr>
	<thead>
		 <tr>
        <th class="th-sm">Penalty

        </th>
		<th></th>
		<th class="th-sm">Penalty

        </th>
    </thead>
    <tbody>
		<tr>
			<td><?php echo $row['penalty']; ?></td>
			<td></td>
			<td>
			
			<div class="row">
				<div class="col-md-3">
					<div class="text-center">
						<input type="submit"  name="edit3" class="btn btn-info btn-rounded btn-sm buttonEdit" value="Edit">
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-center">
						<input type="submit" namee="del3" class="btn btn-danger btn-sm btn-rounded buttonDelete" value="Delete">
					</div>
				</div>
			</div>
			</td>
		</tr>
	<?php } ?>
    </tbody>
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
