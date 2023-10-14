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

        <h1>YY College</h1>
        <p><font size = "35">Student Record Management System</p>


        <button class="btn btn-success">
				<span class="glyphicon glyphicon-user"></span> <a href="listrecord.php">List All Student Records</a> 
			  </button>
			
			  <p></p><button class="btn btn-danger">
				<span class="glyphicon glyphicon-heart"></span> <a href="addrecord.php">Add New Student Record</a>
		  	</button></p>
			
			  <p></p><button class="btn btn-warning">
				<span class="glyphicon glyphicon-pencil"></span> <a href="handlerecord.php">Delete/Update Student Record </a>
			  </button></p>

    </div>
  </div>		
</body>