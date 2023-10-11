<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/myMain.css">
		<script src="java/myJava.js"></script> 
	</HEAD>
    <BODY>
        <header>
        <h2> Olivers Website</h2>
  		<?php
			$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
			switch ($file) {
  				case "index":
    				echo "<h3>Forside</h3>";
    				break;
  				case "polaroid":
					echo "<h3>Polaroid billeder</h3>";
    				break;
			  case "counters":
			    echo "<h3>Nedtælling til forskellige events</h3>";
			    break;
			  case "indlejret":
			  	echo "<h3>Her vises indlejret kode fra Google og Youtube</h3>";
			  	break;
			} 
		?>
	</header>
	<BR/>
	<div class="topnav" id="myTopnav">
	<?php
      if ($file == "index")
      echo "<a href='index.php' class='active'>HOME</a>";
  else
      echo "<a href='index.php'>HOME</a>";
  if ($file == "polaroid")
      echo "<a HREF='polaroid.php' class='active'>Polaroid</a>";
  else
      echo "<a HREF='polaroid.php'>Polaroid</a>";
  if ($file == "counters")
      echo "<a HREF='counters.php' class='active'>Nedtælling</a>";
    else
        echo "<a HREF='counters.php'>Nedtælling</a>";
    if ($file == "indlejret")
      echo "<a HREF='indlejret.php' class='active'>Indlejrede ting</a>";
    else
        echo "<a HREF='indlejret.php'>Indlejrede ting</a>";
?>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
</a>
</div>
<BR/>
<!--Credit Bola den almægtig-->