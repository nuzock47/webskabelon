<?php

include_once "header.php";
?>
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
		<div class="container">
			<br/>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d167.1189265846042!2d-89.48577227373683!3d41.84200729226935!2m3!1f180!2f0!3f0!3m2!1i1024!2i768!4f35!5e1!3m2!1sda!2sdk!4v1696834800343!5m2!1sda!2sdk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<br/>
			<br/>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/OLY-I1pIhG8?si=sJKEfkwunwsaE7pw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			<br/>
	</section>
<?php
  include_once "footer.php";
?>
<!--credit til Bola den almægtig-->