<?php
  function readAllFilms(){
	  //loeme andmebaasist
	  //loome andmebaasiühenduse (nt $conn)
	  $conn = new mysqli ($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	  //valmisame ette päringu 
	  $stmt = <$conn->prepare("SELECT pealkiri, aasta FROM film");
	  //seome saadava tulemuse muutujaga
	  $stmt->bind_result($filmTitle, $filmYear);
	  //käivitame SQL päringu
	  $stmt->execute();
	  $filmInfoHTML = "";
	  while($stmt->fetch()) {
		  $filmInfoHTML .= "<h3>" .$filmTitle ."</h3>";
		  $filmInfoHTML .= "<p>Tootmisaasta: " .$filmYear ."</p>";
		  echo $filmTitle;
		  
	  }
	  echo $filmInfoHTML;
	  //sulgeme ühenduse
	  $stmt->close();
	  $conn->close();
	  //väljastan väärtuse


?>