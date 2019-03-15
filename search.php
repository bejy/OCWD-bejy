<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>CWD</title>
</head>
<body>
<form>
	<input type="text" name="textsearch">
	<button type="submit" name="searchbutton">Search</button>
</form>

<table style="float:left">

	<?php $results = mysqli_query($db, "SELECT * FROM consumer1"); ?>
	
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
	
     <?php while ($row = mysqli_fetch_array($results)) { ?>
			echo <div class="showlist">
		<tr>
			<td><?php echo $row['account_no']; ?></td>
			<td><?php echo ucwords($row['fname']. "  " .$row['mname']. " " .$row['lname']); ?></td>
			<td><?php echo ucwords($row['streetname'].", ".$row['barangayname'].", ".$row['cityname']); ?></td>
			<td><?php echo $row['meterbrandno']; ?></td>
			<td>
			</div>
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
</body>
</html>
