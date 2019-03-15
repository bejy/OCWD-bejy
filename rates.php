<?php include('server.php')?>
<!DOCTYPE html>
<html>

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
<form method="post" action="server.php"/>
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
<table width="450px">
<td>
	<?php $results = mysqli_query($db, "SELECT * FROM resicom"); ?>
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
			<td><?php echo "₱". " " .$row['residential']; ?></td>
			<td><?php echo "₱". " " .$row['commercial']; ?></td>
			<td>
			
			<div class="row">
				<div class="col-md-3">
					<div class="text-center">
						<a class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalLoginForm">Edit</a>
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
		<?php } ?>
	<?php $results1 = mysqli_query($db, "SELECT * FROM seniorpwd"); ?>
    <tbody>
	  <?php while ($row = mysqli_fetch_array($results1)) { ?>
		<tr>
			<td><?php echo "₱". " " .$row['senior']; ?></td>
			<td><?php echo "₱". " " .$row['pwd']; ?></td>
			<td>
			
			<div class="row">
				<div class="col-md-3">
					<div class="text-center">
						<a class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalLoginForm1">Edit</a>
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
	<?php } ?>
	<?php $results2 = mysqli_query($db, "SELECT * FROM penalty"); ?>
    <tbody>
		  <?php while ($row = mysqli_fetch_array($results2)) { ?>
		<tr>
			<td><?php echo "₱". " " .$row['penalty']; ?></td>
			<td></td>
			<td>
			
			<div class="row">
				<div class="col-md-3">
					<div class="text-center">
							<a class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalLoginForm2">Edit</a>
					</div>
				</div>
			</div>
			</td>
		</tr>

    </tbody>
	
	<?php } ?>
  <!-- resicom modal -->
  
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Residential/Commercial  Rates</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <center>
	 <div class="modal-body mx-1">
     <div class="form-row">
		<div class="col-md-3">
			<label>Residential</label>
		</div>
		<div class="col-md-6">
			<input  class="form-control form-control-sm" type="number" name="fname" placeholder="₱" value="<?php echo $residential; ?>"/>
		</div>
	  </div>
	</div>
	<div class="modal-body mx-1">
	  <div class="form-row">
   		<div class="col-md-3">
			<label>Commercial</label>
		</div>
		<div class="col-md-6">
			<input  class="form-control form-control-sm" type="number"  placeholder="₱"/>
		</div>
	</div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" class="btn btn-info btn-rounded btn-sm buttonEdit" name="update1" value="UPDATE"/>
      </div>
	</div>
    </div>
</div>


  <!-- seniorpwd modal -->
  
<div class="modal fade" id="modalLoginForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Senior/PWD  Discounts</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <center>
	 <div class="modal-body mx-1">
     <div class="form-row">
		<div class="col-md-3">
			<label>Senior</label>
		</div>
		<div class="col-md-6">
			<input  class="form-control form-control-sm" type="number" placeholder="₱"/>
		</div>
	  </div>
	</div>
	<div class="modal-body mx-1">
	  <div class="form-row">
   		<div class="col-md-3">
			<label>PWD</label>
		</div>
		<div class="col-md-6">
			<input  class="form-control form-control-sm" type="number" name="update2" placeholder="₱"/>
		</div>
	</div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
		<input type="submit" class="btn btn-info btn-rounded btn-sm buttonEdit" value="UPDATE"/>
      </div>
	</div>
    </div>
  </div>

  
   <!-- penalty --> 
   
  <div class="modal fade" id="modalLoginForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Penalty</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <center>
	 <div class="modal-body mx-1">
     <div class="form-row">
		<div class="col-md-3">
			<label>Penalty</label>
		</div>
		<div class="col-md-6">
			<input  class="form-control form-control-sm" type="number" placeholder="₱"/>
		</div>
	  </div>
	</div>
      <div class="modal-footer d-flex justify-content-center">
       <input type="submit" class="btn btn-info btn-rounded btn-sm buttonEdit" name="update3" value="UPDATE"/>
      </div>
	</div>
    </div>
  </div>
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
