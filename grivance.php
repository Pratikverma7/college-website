<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIC Grivance</title>
    <style>
       @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
 

 

.courses-container {
	display:inline-block;
    margin-right:100px;
}
 

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 100%;
}

.course h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #2A265F;
	color: #fff;
	padding: 30px;
	max-width: 250px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}

.progress-container {
	position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 150px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
}

.progress::after {
	border-radius: 3px;
	background-color: #2A265F;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
}

.btn {
	background-color: #2A265F;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: relative;  
	letter-spacing: 1px;
}

 
.floating-btn {
	border-radius: 26.5px;
	background-color: #001F61;
	border: 1px solid #001F61;
	box-shadow: 0 16px 22px -17px #03153B;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	line-height: 20px;
	padding: 12px 20px;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 999;
}

.floating-btn:hover {
	background-color: #ffffff;
	color: #001F61;
}

.floating-btn:focus {
	outline: none;
}

.floating-text {
	background-color: #001F61;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}

.floating-text a {
	color: #FF7500;
	text-decoration: none;
}

@media screen and (max-width: 480px) {
 
	
	.floating-btn {
		right: 10px;
	}
}
    </style>
</head>
<body><br><center>
<section style="background-color:#fff; width:80%; margin:2%; padding:2%; 
    box-shadow: 0 20px 25px rgba(0,0,0,0.15);">
<center><h1>Grivance Readdersal - CIC </h1></center>
<div class="courses-container">

	<div class="course">
		<div class="course-preview">
			<h6>General Students</h6>
			<h2>Gen.</h2>
			 
		</div>
		<div class="course-info">
			 
			 
			<h2> </h2>
			<button class="btn"><a style="color:white; text-decoration:none;" href="http://app.du.ac.in/sgr/index.php/form/create">Go To Form</a></button>
		</div>
	</div>
</div>

<div class="courses-container">

	<div class="course">
		<div class="course-preview">
			<h6>Scheduled Caste</h6>
			<h2>SC</h2>
			 
		</div>
		<div class="course-info">
			 
			 
			<h2> </h2>
			<button class="btn">Go To Form</button>
		</div>
	</div>
</div>
<div class="courses-container">

	<div class="course">
		<div class="course-preview">
			<h6>Scheduled Tribe</h6>
			<h2>ST</h2>
			 
		</div>
		<div class="course-info">
			 
			 
			<h2> </h2>
			<button class="btn">Go To Form</button>
		</div>
	</div>
</div>
<div class="courses-container">

	<div class="course">
		<div class="course-preview">
			<h6>Other Backward</h6>
			<h2>OBC</h2>
			 
		</div>
		<div class="course-info">
			 
			 
			<h2> </h2>
			<button class="btn">Go To Form</button>
		</div>
	</div>
</div>

  
</center>
 </section>
<script>
// INSERT JS HERE


// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});
</script>
</body>
</html>


<?php
include('footer.php');
?>