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
<br>
<div class="row">
  <div class="col-md-12">
    <ul class="stepper stepper-horizontal">
      <li>
      </li>
      <li class="active">
        <a href="edit.php">
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
<table width="200px">
<td>
 <div class="col-md-12">
	<h1>Wala Pa!!</h1>
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



