<?php
	if(isset($_POST['search']))
	{
    	$valueToSearch = $_POST['valueToSearch'];
    	// search in all table columns
   		// using concat mysql function
   		$query = "SELECT * FROM consumer1 WHERE consumer1.account_no LIKE '%$valueToSearch%' OR fname LIKE '%$valueToSearch%' ";
   		$search_result = filterTable($query);
    
	}
 	else {
    	$query = "SELECT * FROM `consumer1`";
    	$search_result = filterTable($query);
	}

		// function to connect and execute the query
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
<form method="post" action="home.php"/>
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
					<a class="nav-link" href="index.php">Logout</a>
				</li>
			</ul>
		</div>
		</div>

	 
    </div>
  </nav>
</header>
	<center>
	</br></br></br></br>
	<table>

		<td>
		<div class="form-row">
			<div class="col-md-7">
				<input class="form-control mr-sm-5" type="text" name="valueToSearch" placeholder="Search" aria-label="Search">
			</div>
			<div class="col-md-5">
				<input class="btn btn-info btn-rounded btn-sm"  name="search" type="submit" value="Search">
			</div>
		</div>
	</td>
	</table>
	</center>
	</br>

	<table style="float:left">
	<td>
      <a href="consumer1.php" class="btn btn-info btn-rounded btn-lg">Add<i
          class="fas fa-plus-square ml-1"></i></a>
	</td>
	</table>
	
	<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">Account Number

        </th>
        <th class="th-sm">Name

        </th>
        <th class="th-sm">Address

        </th>
        <th class="th-sm">Meter Number

        </th>
		<th class="th-sm">Action
        </th>
      </tr>
    </thead>
    <tbody>
     <?php while ($row = mysqli_fetch_array($search_result)) { ?>
		<tr>
			<td><?php echo $row['account_no']; ?></td>
			<td><?php echo ucwords($row['fname']. "  " .$row['mname']. " " .$row['lname']); ?></td>
			<td><?php echo ucwords($row['streetname'].", ".$row['barangayname'].", ".$row['cityname']); ?></td>
			<td><?php echo $row['meterbrandno']; ?></td>
			<td>
			<div class="row">
				<div class="col-md-5">
					<div class="text-center">
						<a href="edit.php?edit=<?php echo $row['account_no']; ?>" class="btn btn-info btn-rounded btn-sm buttonEdit">Edit</a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="text-center">
						<a href="index.php?delete=<?php echo $row['consumer_id']; ?>" class="btn btn-danger btn-sm btn-rounded buttonDelete"/>Delete</a>
					</div>
				</div>
			</div>
			</td>
		</tr>
	<?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th>Account Number
        </th>
        <th>Name
        </th>
        <th>Address
        </th>
        <th>Meter Number
        </th>
	    <th>Action
        </th>
      </tr>
    </tfoot>
  </table>
</div>


</body>
</html>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
   <script type="text/javascript" src="js/table.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>
