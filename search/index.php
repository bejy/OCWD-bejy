<?php
	mysql_connect("localhost","root","") or die("not connect");
	mysql_select_db("books") or die("could not");
	$output="";
	if(isset($_POST['search'])) {
		$searchq=$_POST['search'];
		$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
		
		$query = mysql_query("SELECT * FROM books WHERE title LIKE '%#searchq%' OR author LIKE '%searchq%' OR genre LIKE '%searchq%'") or die("Could Not See");
		echo $query;
	/*	$count = mysql_num_rows($query);
		if($count == 0) {
			$output = "NO result";
		}else{
			while($row = mysql_fetch_array($query)){
			$title = $row['title'];
			$author = $row['author'];
			$genre = $row['genre'];
			$id = $row['id'];
			$output = '<div>'.$title.' '.$author.' '.$genre.'</div>';

			}
		}
		*/
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>tada</title>
</head>
<body>
	<form method="post" action="index.php">
		<input type="text" placeholder="Search"/>
		<input type="submit" name="search" value=">>"/>
	</form>
	
<?php print("$output");?>

</body>
</html>