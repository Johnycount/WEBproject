<!DOCTYPE html>
<html>
<head>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<style>

	.professors{
		display: inline-flex;
		flex-wrap: wrap;
		margin-left: 27px;
	}
	.professor{
		border: 3px solid #5900ba;
		border-radius: 13px;
		margin: 30px;
		
		}
	.professor h4{
		text-align: center;
		color: #1814ff;
	}
	.name, .class, .about{
		color: white;
		text-align: center;
		font-family: 'Lobster', cursive;
	}

	.soz h1{
		color: white;
		font-family: 'Lobster', cursive;
		text-align: center;
	}

	div img{
		border-radius: 10px;
		height: 150px;
		width: 150px;
	}
	body{
		background-image: url(images/hp.jpg);
	}
	</style>
</head>
<body>
	<div class="soz">
		<h1>List of our Professors</h1>
	</div>
	<div class="professors">
	<?php
	$db = mysqli_connect("localhost", "root", "","professors");

	$results = mysqli_query($db,"SELECT * FROM `professor` WHERE 1");
	while ($row = mysqli_fetch_array($results)) {
	 ?>

		 <div class="professor">
			<img src=<?php echo $row["photo"]; ?>>
			<div class="name">
				<h4>Name:</h4>
				<?php echo $row["name"]; ?></div>
			<div class="about">
				<h4>About:</h4>
				<?php echo $row["about"]; ?></div>
			<div class="class">
				<h4>Class:</h4>
				<?php echo $row["class"]; ?></div>
		 </div>
	 <?php } ?>
	 </div>

</body>
</html>
