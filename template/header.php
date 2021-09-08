<?php 

session_start();
$name=$_SESSION['name'];



//get cookie
$gender= $_COOKIE['gender'] ?? 'unknown';








 ?>
<head>
	
	<title> coffee </title>
	
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<style type="text/css">
	.lighten-4{
		background: lightgray ;
	}
	.brand{
		background: #cbb09c !important;
	}
	.brand-text{
		color: #cbb09c !important;
}
	form{
		max-width: 460px;
		margin: 20px auto;
		padding: 20px;
	}
	.coficon{
		width: 100px;
		margin: 40px auto -30px;
		display: block;
		position: relative;
		top: -30px;
	}


</style>
 
</head>
<body class="gray lighten-4">
	<div class="white z-depth-0">
		<div class="container">
			
			<a href="index.php" class="brand-logo brand-text">  Cofee</a>
			<ul id="nav-mobile" class="right hide-on-small-and-down">

				<li class="gray-text">hello <?php echo htmlspecialchars($name) ?></li> 
				<li class="gray-text">(<?php echo htmlspecialchars($gender) ?>)</li>

				<li> <a href="add.php" class="btn brand z-depth-0"> Add a coffe</a></li>

			</ul>


		</div>



	</div>