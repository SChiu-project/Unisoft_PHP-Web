<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Stick+No+Bills&display=swap" rel="stylesheet">

  	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
		<div class="container">
			<div class="jumbotron">	
				<h1>Delete/Update Student Record</h1>
		</div>
			</div>

	<?php

	$con = mysqli_connect("localhost","root","password","myschool");
	
	$sql = "  select * from studentdata";
	
	$result = mysqli_query($con,$sql);
	
	$rowcount = mysqli_num_rows($result);

	echo "<p>Number of Rows:$rowcount"; 
	
	echo "
	<table border=2 cellpadding=20>
	<tr>
		<th>Student ID</th>
		<th>Student Name</th>
		<th>DOB of Student</th>
		<th>Gender</th>
		<th>Name of Class</th>
		<th>Action</th>
	</tr>";
	
	for($i=0; $i<$rowcount; $i++) {
		
			// Fetch a row from the $result
			$row = mysqli_fetch_array($result);
			
			//print_r($row);
			$studentid   = $row['studentid'];
			$name = $row['name'];
			$dob = $row['dob'];
			$gender = $row['gender'];
			$classname = $row['classname'];
			
			// echo "<p>$pid $pname $price $photo $supplier"; 
			
			echo "
			<tr>
				<td>$studentid</td>
				<td>$name</td>
				<td>$dob</td>
				<td>$gender</td>
				<td>$classname</td>
				<td>
					<a href='deleterecord.php?studentid=$studentid'>Delete</a> /
					<a>Update (to be released)</a>
				</td>
			</tr>";
	}
	echo "
	</table>
	";

	?>

	<button class="btn btn-default">
	<span class="glyphicon glyphicon-home"></span> <a href="homemenu.php">Back</a> 
	</button><p>

</body>	