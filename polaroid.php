<?php

include_once "header.php"
?>
	<style> 
		div.polaroid {
		    width: 294px;
		    padding: 15px 10px 20px 10px;
		    border: 1px solid #BFBFBF;
		    background-color: white;
		    box-shadow: 10px 10px 5px #aaaaaa;
		}

		div.rotate_left {
		    float: left;
		    -ms-transform: rotate(7deg); /* IE 9 */
		    -webkit-transform: rotate(7deg); /* Safari */
		    transform: rotate(7deg);
		}

		div.rotate_right {
		    float: left;
		    -ms-transform: rotate(-8deg); /* IE 9 */
		    -webkit-transform: rotate(-8deg); /* Safari */
		    transform: rotate(-8deg);
		}
	</style>
<section>
	<div class="container">
		<BR/>
		<BR/>
		<div class="polaroid rotate_left">
		  <img src="images\københavn.jpg" alt="københavn" width="284" height="213">
		  <p class="caption">københavn bilede jeg tog selv</p>
		</div>

		<div class="polaroid rotate_right">
		  <img src="images\ben10tierlist.jpg" alt="ben10tierlist" width="284" height="213">
		  <p class="caption">my tierlist of the ben10 ailiens</p>
		</div>
	</div>
</section>
<?php
  include_once "footer.html";
?>
<!--credit til Bola den almægtig-->