<?php
	$indeks = $_REQUEST["indeks"]; //od ktorego indeksu zaczynamy pobierac posty
	$iloscpostow  = 9;
	include("logowaniedb.php");
	$conn = new mysqli($servername, $username, $password, $dbname); //tworzenie polaczenia
	$conn->set_charset("utf8"); //polaczenie w polskich znakach
	// Check connection
	if ($conn->connect_error) {
		die("Polaczenie z bazą nieudane." . $conn->connect_error);
	} 
	if($_GET['kategoria']=='najnowsze')
		$sql = 'SELECT id,data,tytul,wstep,zdjecie,url,kategoria,wyswietlenia FROM postyDozoba ORDER BY id DESC LIMIT '.$indeks.', '.$iloscpostow;
	else
		$sql = 'SELECT id,data,tytul,wstep,zdjecie,url,kategoria,wyswietlenia FROM postyDozoba WHERE (kategoria="'.$_GET['kategoria'].'") ORDER BY id DESC LIMIT '.$indeks.', '.$iloscpostow;
	
	$result = $conn->query($sql);
	$i=0;
	
	echo '<div class="row">';
	while($row = $result->fetch_assoc()) {
		$i=$i+1;
		echo '<div class="col-xs-12 hidden-sm col-md-4">';
			echo'<a href="'.$row['url'].'" >';
				echo '<div class="shadow">';
					echo '<h2 class="glownaAddPad h2PostGlowna">'.$row['tytul'].'</h2>';
					echo '<img class="img-responsive imgPostGlowna" src="upload/posty/'.$row['zdjecie'].'" alt="'.$row['zdjecie'].'">';
					echo '<p class="glownaAddPad">'.$row['wstep'].'</p>';
					echo '<div class="metaDaneHome">';
						echo '<div class="dataPostHome">'.$row['data'].'</div>';
						echo '<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i>'.$row['wyswietlenia'].'</div>';
					echo '</div>';
				echo '</div>';
			echo '</a>';
		echo '</div>';
		if ($i%3==0) {
			echo '</div><!--row-->';
			echo '<div class="row">';
		}
	}
	$conn->close();
	echo '</div><!--row-->';
?> 