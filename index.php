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
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
   <link href="css/body.css" rel="stylesheet">
</head>

<body style="background-image:url(water.jpg)">
<form method="post" action="server.php"/>

<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar" >
    <a class="navbar-brand" href="#"><strong>Water District</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Billing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Payment</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Others</a>
		<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item">Rates/Discounts/Penalties</a>
        </div>
      </li>
	 </ul>
<div class="row">
		<div class="col-md-12">
			<ul class="navbar-nav nav-flex-icons">
			    <li class="nav-item">
					<a class="nav-link" href="passwordup.php">Update Password</a>
				</li>
			</ul>
		</div>
		</div>
	 
    </div>
  </nav>
</header></br></br></br></br></br>
<center>
<table>
<td>
<!-- Default form login -->
<form class="text-center border border-light p-5">

    <p class="h4 mb-4">Login</p>

    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username" name="name" required="required">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password" required="required">


    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="login_user" >Login</button>

</form>
<!-- Default form login -->
</table>
</center>

</body>

</html>
