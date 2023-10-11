<?php

include_once "header.php";
?>
	
<script type="text/javascript" src="java\main.js"></script>
<script type="text/javascript">
	var ID1=window.setInterval(function () {update(new Date("Oct 14 2023 15:30:00"),1)} , 1000);
	var ID2=window.setInterval(function () {update(new Date("Dec 20 2023 14:20:10"),2)} , 1000);
	var ID3=window.setInterval(function () {update(new Date("Jun 28 2025 12:00:00"),3)} , 1000);
</script>
<style>
body
{
	font-family: Arial, Helvetica, sans-serif;
}
  
  header {
	background-color: #265627;
	padding: 20px;
	text-align: center;
	font-size: 22px;
	color: white;
  }
  
  footer {
	font-size: 15px;
	background-color: #265627;
	padding: 3px;
	text-align: center;
	color: white;
  }
  
  h1 {
   background-color: #265627;
   padding: 5px;
   text-align: center;
   color: white;
  }
  
  h2 {
   background-color: #265627;
   padding: 5px;
   text-align: center;
   color: white;
  }
  
  h3 {
   background-color: #265627;
   padding: 5px;
   text-align: center;
   color: white;
  }
  h4 {
   background-color: #265627;
   padding: 10px;
   text-align: center;
   color: white;
  }
  
  @media screen and (max-width: 600px) {
	.topnav a:not(:first-child) {display: none;}
	.topnav a.icon {
	  float: right;
	  display: block;
	}
  }
  @media screen and (max-width: 600px) {
	.topnav.responsive {position: relative;}
	.topnav.responsive a.icon {
	  position: absolute;
	  right: 0;
	  top: 0;
	}
	.topnav.responsive a {
	  float: none;
	  display: block;
	  text-align: left;
	}
  }
  
  
  form {
	background-color:#4CAF50;
	padding: 20px;
  }
  
  table {
	width:100%;
  }
  
  table, th, td {
	border: 1px solid #265627;
	border-collapse: collapse;
  }
  
  th, td {
	padding: 5px;
	text-align: center;
  }
  
  table.names tr:nth-child(even) {
	background-color: #eee;
  }
  table.names tr:nth-child(odd) {
	background-color:#fff;
  }
  
  table.names th {
	background-color: #265627;
	color: white
  }
  
  a.linkColor:link {color:#ff0000;text-decoration:none;}
  a.linkColor:visited {color:#0000ff;text-decoration:none;}
  a.linkColor:hover {text-decoration:underline;}
  

  span.a {
	font-size: 20px;
	display: block;
	padding: 5px 10px 5px 10%;
	text-align: left;
  }
  span.b {
	font-size: 20px;
	display: block;
	padding: 5px 10px 5px 10%;
	text-align: center;
  }
  
  .topnav {
	overflow: hidden;
	background-color: #265627;
  }
  
  .topnav a {
	float: left;
	display: block;
	color: #ffffff;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
  }
  
  .topnav a:hover {
	background-color: #4CAF50;
	color: black;
  }
  
  .topnav a.active {
	background-color: #4CAF50;
	color: rgb(0, 0, 0);
  }
  
  .topnav .icon {
	display: none;
  }
  
  .midt{
	  font-size: 20px;
	  text-align: center;
  }
  
  .midt2{
	  font-size: 30px;
	  padding: 20px;
	  text-align: center;
  }
  
  .container{
	background-color: #6AC88B;
	margin: 0 auto;
	width: 70%;
	height: 500px;
	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 5px
  }
  
  

	</style>
<section>
	<div align="center">
		<h1>Nedt&aelig;lling til Efterårsferie ! ! ! </h1>
		<p id="cnt1">Der er <span id="days1"></span> dage
		<span id="hours1"></span> timer
		<span id="minutes1"></span> minutter og
		<span id="seconds1"></span> sekunder til.</p>
		<br>
		<h1>Nedt&aelig;lling til Juleferie ! ! ! </h1>
		<p id="cnt2">Der er <span id="days2"></span> dage
		<span id="hours2"></span> timer
		<span id="minutes2"></span> minutter og
		<span id="seconds2"></span> sekunder til.</p>
		<br>
		<h1>Nedt&aelig;lling til vores dimission ! ! ! </h1>
		<p id="cnt3">Der er <span id="days3"></span> dage
		<span id="hours3"></span> timer
		<span id="minutes3"></span> minutter og
		<span id="seconds3"></span> sekunder til.</p>
	</div>

</section>
<?php
  include_once "footer.php";
?>
<!--credit til Bola den almægtig-->