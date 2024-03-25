<?php
session_start();
include("includes/openDbConn.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lab 5 - Select</title>
</head>
<body>
	<?php
	//prepare mysql statement
	$sql = "SELECT UserID, LastName, FirtName, Title FROM userslab5";
	
	//execute sql query and store the result of the execution into $result
	//the $db is the variable you created in openDbConn.php
	$result = mysqli_query($db, $sql);
	
	//check to see if there are records in the result, if not set the number of results to 0
	if( empty($result) )
		$num_results = 0;
	else
		$num_results = mysqli_num_rows($result);
	?>
	
	<h1 style="text-align: center">Lab 5 - Select</h1>
	
	<?php
	include("includes/menu.php");
	?>
	
	<table style="border:0px; width:500px; padding:0px; margin:0px auto; border-spacing:0px;" title="Listing of Users">
		<thead>
			<tr>
				<th colspan="4" style="font-weight:bold; background-color:#b1946c; text-align:center; text-decoration:underline;">usersLab5 table</th>
			</tr>
			<tr>
				<th style="background-color:#b1946c; font-weight:bold;">UserID</th>
				<th style="background-color:#b1946c; font-weight:bold;">LastName</th>
				<th style="background-color:#b1946c; font-weight:bold;">FirstName</th>
				<th style="background-color:#b1946c; font-weight:bold;">Title</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4" style="text-align:center; font-style:italic;">Information pulled from MySQL database</td>
			</tr>
		</tfoot>
		<tbody>
			<?php
			//loop through the results
			for( $i=0; $i<$num_results; $i++ ) {
				//store a single record out of $result into $row
				$row = mysqli_fetch_array($result);
				
				//below, always use trim() on data pulled from the database
				?>
				<tr>
					<td style="border-right:1px solid #000000;"><?php echo( trim( $row["UserID"] ) );?></td>
					<td style="border-right:1px solid #000000;"><?php echo( trim( $row["LastName"] ) );?></td>
					<td style="border-right:1px solid #000000;"><?php echo( trim( $row["FirstName"] ) );?></td>
					<td><?php echo( trim( $row["Title"] ) );?></td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>