<?php

include_once "header.php";
?>
	
<script type="text/javascript" src="java\main.js"></script>
<script type="text/javascript">
	var ID1=window.setInterval(function () {update(new Date("Oct 14 2023 15:30:00"),1)} , 1000);
	var ID2=window.setInterval(function () {update(new Date("Dec 20 2023 14:20:10"),2)} , 1000);
	var ID3=window.setInterval(function () {update(new Date("Jun 28 2025 12:00:00"),3)} , 1000);
</script>
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