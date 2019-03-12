<?php
include('server.php');
	if (isset($_GET['edit'])) {
		$account_no = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM consumer1 WHERE account_no=$account_no");

			$n = mysqli_fetch_array($record);
			$consumer_id=$n['consumer_id'];
			$account_no=$n['account_no'];
			$fname= $n['fname'];
			$mname=$n['mname'];
			$lname= $n['lname'];
			$bdate=$n['bdate'];
			$bplace= $n['bplace'];
			$cstatus=$n['cstatus'];
			$cnum= $n['cnum'];
			$occupation = $n['occupation'];
			$momname=$n['momname'];
			$dadname= $n['dadname'];
			$spousename = $n['spousename'];
			$streetname=$n['streetname'];
			$barangayname= $n['barangayname'];
			$cityname=$n['cityname'];
			$resicom= $n['resicom'];
			$pubpriv=$n['pubpriv'];
			$senior= $n['senior'];
			$pwd=$n['pwd'];
			$monthincome=$n['monthincome'];
			$dateinstalled = $n['dateinstalled'];
			$meterbrandno=$n['meterbrandno'];
			$initread= $n['initread'];
		}

?>
<!DOCTYPE html>
<html>

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
        <a href="edit.php">
          <span class="circle">C</span>
          <span class="label">Edit Consumer</span>
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
	<input type="hidden" name="consumer_id" value="<?php echo $consumer_id; ?>">
	
	<div class="form-row">
		<div class="col-md-3">
			<label>Account Number </label>
			<input  class="form-control form-control-sm" type="text" name="account_no" value="<?php echo $account_no; ?>"/></br>
		</div>
	</div>	
	<div class="form-row">
		<div class="col-md-4">
			<label>First Name  </label>
			<input  class="form-control form-control-sm" type="text" name="fname" value="<?php echo $fname; ?>"/>
		</div>
		<div class="col-md-4">
			<label>Middle Name </label>
			<input  class="form-control form-control-sm" type="text" name="mname" value="<?php echo $mname; ?>"/></br>
		</div >
		<div class="col-md-4">
		<label>Last Name </label>
		<input  class="form-control form-control-sm" type="text" name="lname" value="<?php echo $lname; ?>"/></br>
		</div>
	</div>
	
	<div class="form-row">
		<div class="col-md-2">
			<label>Birthdate </label>
			<input  class="form-control form-control-sm" type="date" name="bdate"  value="<?php echo $bdate; ?>"/></br>
		</div>
		<div class="col-md-6">
			<label>Birthplace  </label>
			<input  class="form-control form-control-sm" type="text" name="bplace"  value="<?php echo $bplace; ?>"/></br>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-2">
			<label>Civil Status  </label>
				<select name="cstatus" class="form-control form-control-sm">
					<option value="single">Single</option>
					<option value="married">Married</option>
					<option value="widow">Widow</option>
				</select> 
		</div>
		<div class="col-md-4">
			<label>Contact Number </label>
			<input  class="form-control form-control-sm" type="text" name="cnum"  value="<?php echo $cnum; ?>"/></br>
		</div>



		<div class="col-md-5">
			<label>Occupation  </label>
			<input  class="form-control form-control-sm" type="text" name="occupation"value="<?php echo $occupation; ?>"/></br>
		</div>
	</div>
	<div class="form-row">

		<div class="col-md-2">
			<label>Street/Purok  </label>
			<input class="form-control form-control-sm" type="text" name="streetname" value="<?php echo $streetname; ?>"/></br>
		</div>
		<div class="col-md-3">
			<label>Barangay </label>
			<input class="form-control form-control-sm" type="text" name="barangayname" value="<?php echo $barangayname; ?>"/></br>
		</div>
		<div class="col-md-3">
			<label>City: </label>
			<input class="form-control form-control-sm" type="text" name="cityname" value="<?php echo $cityname; ?>"/></br>
		</div>
	</div>
	
</td>
</table>
<table width="700px">

<td>	
	<div class="form-row">
		<div class="col-md-4">
			<label>Mother's Name  </label>
			<input  class="form-control form-control-sm" type="text" name="momname"  value="<?php echo $momname; ?>"/></br>
		</div>
		<div class="col-md-4">
		<label>Father's Name  </label>
		<input  class="form-control form-control-sm" type="text" name="dadname" value="<?php echo $dadname; ?>"/></br>
		</div>
		<div class="col-md-4">
		<label>Spouse's Name  </label>
		<input  class="form-control form-control-sm" type="text" name="spousename" value="<?php echo $spousename; ?>"/></br>
		</div>
	
	</div>
	
	<div class="form-row">
		<div class="col-md-3">
			<label>Type of Residence  </label>
				<select class="form-control form-control-sm" name="resicom">
					<option value="residential">Residential</option>
					<option value="commercial">Commercial</option>>
				</select> </br>
		</div>
		<div class="col-md-3">
			<label>Public or Private  </label>
				<select class="form-control form-control-sm" name="pubpriv">
					<option value="public">Public</option>
					<option value="private">Private</option>>
				</select> </br>
		
		</div>
	</div>
	
	<div class="form-row">
			<div class="col-md-2">
				<label >Senior or PWD : </label>
			</div> 
			<div class="custom-control custom-checkbox custom-control-inline">
			  <input type="checkbox" class="custom-control-input" id="defaultInline1" name="senior">
			  <label class="custom-control-label" for="defaultInline1">Senior</label>
			</div>
	</div>
	<div class="form-row">
			<div class="col-md-2">
				<label></label>
			</div> 
			<div class="custom-control custom-checkbox custom-control-inline">
			  <input type="checkbox" class="custom-control-input" id="defaultInline2" name="pwd">
			  <label class="custom-control-label" for="defaultInline2">PWD</label>
			</div>
	</div>
	<div class="form-row">
		<div class="col-md-4">	
			<label>Monthly Income  </label>
			<input class="form-control form-control-sm" type="number" name="monthincome" placeholder="₱" value="<?php echo $monthincome; ?>"/></br>
		</div>
	</div>
	<div class="form-row">

		<div class="col-md-2">
			<label>Date Installed  </label>
			<input class="form-control form-control-sm" type="date" name="dateinstalled" value="<?php echo $dateinstalled; ?>"/></br>
		</div>
		<div class="col-md-3">
			<label>Meter Brand and No </label>
			<input class="form-control form-control-sm" type="text" name="meterbrandno"  value="<?php echo$meterbrandno;?>"/></br>
		</div>
		<div class="col-md-4">
			<label>Initial Reading </label>
			<input class="form-control form-control-sm" type="text" name="initread"  value="<?php echo$initread;?>"/></br>
		</div>
	</div>
	<div class="form-row">
			</br>
			<div class="col-md-3">
			<input class="btn btn-info btn-rounded btn-sm" type="submit" name="update" value="Edit"></br></br></br>
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



