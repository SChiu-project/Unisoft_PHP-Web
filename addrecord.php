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
			<h1>Add New Student Record</h1>
		</div>
  	
	<form enctype="multipart/form-data" method="post" action="addrecord_connection.php">
	
		<div class="form-group">	
		<label>Student Name:</label>
		<input type="text" name="name" class = "form-control" placeholder = "Enter your name"/>
		</div>
		<p></p>
		
		<label>DOB of Student:</label>
		<input type="date" name="dob" class = "form-control"/>
		<p></p>
		
		<label>Gender:</label>
		<select name="gender" class = "form-control"/>
			<option value=F>Female</option>
			<option value=M>Male</option>
		</select>
		<p></p>
		
		<label>Grade:</label>
		<select name="grade" class = "form-control"/>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>
			<option value=5>5</option>
			<option value=6>6</option>
		</select>
		<p></p>
		
		<label>Class:</label>
		<select name="classinput" class = "form-control"/>
			<option value=A>A</option>
			<option value=B>B</option>
			<option value=C>C</option>
			<option value=D>D</option>
		</select>
		<p></p>
	
	<button type="submit" class="btn btn-default">
	<span class="glyphicon glyphicon-heart"></span><a>Add</a>
	</button>

	</form>
	</div>

	<button class="btn btn-default">
	<span class="glyphicon glyphicon-home"></span><a href="homemenu.php">Back</a> 
	</button>

</body>	






