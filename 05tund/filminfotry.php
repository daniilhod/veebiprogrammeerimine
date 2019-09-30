<?php
require("../../../../../config_vp2019.php");
require("functions_film.php");
$userName ="Daniil Hodakovski";
$dataBase = "if19_inga_pe_4";
require ("header.php");
?>
	  <?php
	  echo $userName;
	  ?>
	  progeb veebi
	  
	  </title> 

	</head>
		<body style="background-color:purple;">
		 
		 <h1>Daniil Hodakovski koolitöö leht</h1>
		  <p>See lehekülg on loodud akadeemilise põhimõttega ning ei sisalda tõsiseltvõetavat infot!</p>
		 <h2>Eesti filmid, lisame uue</h2>
		 <form method="post">
			<label>Sisesta pealkiri: </label><input type="text" name="filmtTitle">
		 <br>
		 <label>Filmi tootmisaasta: </label><input type="number" min="1912" max="2019" 
		 value="2019" name="filmYear>
		 <br>
		 <label>Filmi kestus (min): </label><input min="1" max="300" 
		 value="80" name="filmDuration">
		 <br>
		 <label>Filmi žanr: </label><input type="text" name="filmGenre">
		 <br>
		 <label>Filmi tootja: </label><input type="text" name="filmCompany">
		 <br>
		 <label>Filmi lavastaja: </label><input type="text" name="filmDirector">
		 <br>
		 <input type="Submit" value="Salvesta filmi info" name="submitFilm">
		</form>
		</body>
</html>









