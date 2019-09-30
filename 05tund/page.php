<?php
$userName = "Daniil Hodakovski";
$photoDir = "../photos/";
$picFileTypes = ["image/jpeg", "image/png"];
$fullTimeNow = date("d/m/Y H:i:s"); #suur Y et saada 2019 mitte 19
$weekDaysET = ["esmaspäev", "teisipäev", "kolmapäev"];
?>


		<body style="background-color:grey;">
		 
		 <h1>Daniil Hodakovski koolitöö leht</h1>
		  <p>See lehekülg on loodud akadeemilise põhimõttega ning ei sisalda tõsiseltvõetavat infot!</p>
		  <?php
		  echo $semesterInfoHTML = "<p>Siin peaks olema info semestri kulgemise kohta!</p>";
		   #info semestri kulgemise kohta
		  $semesterStart = new DateTime("2019-9-2");
		  $semesterEnd = new DateTime("2019-12-13");
		  $semesterDuration = $semesterStart->diff($semesterEnd);
		  $today = new DateTime("now");
		  $fromSemesterStart = $semesterStart->diff($today);
		  #var_dump($fromSemesterStart);
		  $elapsedValue = $fromSemesterStart->format("%r%a"); 
		  
		  $durationValue = $semesterDuration->format("r%a%");
		  #echo $testValue;
		  #<meter min="0" max="155" value="33">Väärtus</meter>
		  if($elapsedValue > 0){
			$semesterInfoHTML = "<p>Semester on täies hoos: ";
			$semesterInfoHTML .= '<meter min = "0" max = "' .$durationValue .'" ';
			$semesterInfoHTML .= 'value="' .$elapsedValue .'">'; #ERROR
			$semesterInfoHTML .= round($elapsedValue / $durationValue * 100, 1) ."%";
			$semesterInfoHTML .= "</meter>";
			$semesterInfoHTML .="</p>";
		  }
		  
		  #foto lisamine lehele
		  $allPhotos = []; #kuna on tühi, siis allpool saab anda sellele sisu		  
		  $dirContent = array_slice(scandir($photoDir), 2); #array_slice võtab esimesed read ära
		  #var_dump($dirContent);
		  foreach ($dirContent as $file){
			  $fileInfo = getImagesize($photoDir .$file);
			  #var_dump($fileInfo);
			  if(in_array($fileInfo["mime"], $picFileTypes) == true){
				  array_push($allPhotos, $file); #kui fail ON pilt siis viska see $allPhotos massiivi
			  }
		  }
		  
		
		  #var_dump($allPhotos);
		  $picCount = count($allPhotos);
		  $picNum = mt_rand(0, ($picCount - 1));
		  #echo $allPhotos[$picNum];
		  $photoFile = $photoDir .$allPhotos[$picNum];
		  $randomImgHTML = '<img src="' .$photoFile .'" alt ="TLÜ Terra Õppehoone">';
		  require("header.php");
		  ?>
		
		  <hr> 
		  
		  
		  <p> Lehe avamise hetkel oli aeg:
		  <?php
		  echo $fullTimeNow;
		  ?>
		  . </p>
		  <p>UPD: kodutöö, muutsin tausta</p>
		  <p>Kasutame php serverit, mille kohta saab infot <a href="serverinfo.php">siit</a>!</p>
		  <p>Meie esimene php programm on <a href = "try.php"> siin </a>!</p> 
		

		<hr>
		
		<?php
		echo $randomImgHTML;
		
		
		?>

		
</body>
</html>