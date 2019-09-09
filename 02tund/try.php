<?php
$userName = "Daniil Hodakovski";
$fullTimeNow = date("d/m/Y H:i:s"); #suur Y et saada 2019 mitte 19
?>
<!DOCTYPE html>
<html lang="et">
	<head>
	  <meta charset="utf-8"> 
	  <title>
	  <?php
	  echo $userName;
	  ?>
	  progeb veebi
	  
	  </title> 

	</head>
		<body style="background-color:purple;">
		 
		 <h1>Daniil Hodakovski koolitöö leht</h1>
		  <p><font size="20">See lehekülg on loodud akadeemilise põhimõttega ning ei sisalda tõsiseltvõetavat infot!</font></p>
		  <hr> 
		  <p> Lehe avamise hetkel oli aeg:
		  <?php
		  echo $fullTimeNow;
		  ?>
		  . </p>
		  <p><font size="6">UPD: kodutöö, muutsin tausta ja teksti suuruse!</font> </p>
		  <p><font size = "6">Kasutame php serverit, mille kohta saab infot <a href="serverinfo.php">siit</a>!</font> </p>
		  <p><font size = "6"> Meie esimene php programm on <a href = "try.php"> siin </a>!</font> </p> 
		 
		</body>
</html>