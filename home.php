<?php
session_start();
if(!isset($_SESSION['name'])){
	header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<style type="text/css">
	.bgimg{
		width:100%;
		height:100vh;
		background-image: url("b.jpg");
	}
		.container h2{
			background-color: rgba(0,0,0,0.5);
			font-weight: bold;
			font-size: 45px;
			color:red;
			text-align: center;
		}
		.container pre{
			color: white;
			background-color: rgba(0,0,0,0.5);
			size:20px;
		}
		.tag{
			font-weight: bold;
			padding-top: 30px;
		}
		.tag2{
			font-weight: bold;
			color: rgb(0,2550,0);
		}
		.tag3{
			color: red;
			padding-top: -30px;
			font-weight: bold;
		}
		#btn{
			alignment-baseline: center;
			color: red;
			background-color: blue;
			text-align: center;
			font-weight: bold;
		}
}
</style>
</head>
<body>
	<div class="bgimg">
	<div class="container">
	<h2>WELCOME dear <?php echo $_SESSION['name'];?></h2>
	<div class="tag">
	<pre><div class="tag2"><center><h3>Hello dear <?php echo $_SESSION['name'];?> here is a story for you.</h3></center></div>
<div class="tag3">
<center><h4>Let us enjoy reading this story of A Wise Counting.</h4></center></div>
<center>Emperor Akbar was in the habit of putting riddles and puzzles to his courtiers. 
He often asked questions which were strange and witty. It took much wisdom to answer these questions. 
Once he asked a very strange question. The courtiers were dumb folded by his question. 
Akbar glanced at his courtiers. As he looked, one by one the heads began to hang low in search of an answer. 
It was at this moment that Birbal entered the courtyard. Birbal who knew the nature of the emperor quickly
 grasped the situation and asked, "May I know the question so that I can try for an answer". 
Akbar said, "How many crows are there in this city?" 
Without even a moment's thought, Birbal replied "There are fifty thousand five hundred and eighty nine crows,
 my lord". 
"How can you be so sure?" asked Akbar. 
Birbal said, "Make you men count, My lord. If you find more crows it means some have come to visit 
their relatives here. If you find less number of crows it means some have gone to visit their relatives elsewhere". 

Akbar was pleased very much by Birbal's wit.</center>
 </pre>
</div>
	<center><a href="logout.php"><button class="btn" id="btn">Logout</button></a></center>
</div>
</div>
</body>
</html>