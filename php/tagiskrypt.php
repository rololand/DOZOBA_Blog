<?php

	$conn = new mysqli($servername, $username, $password, $dbname); //tworzenie polaczenia
	$conn->set_charset("utf8"); //polaczenie w polskich znakach
	// Check connection
	if ($conn->connect_error) {
		die("Polaczenie z bazą nieudane." . $conn->connect_error);
	} 
	//ustawienie metadanych -> na stronie z postem pobrane z bazy danych
	$sql = 'SELECT id,data,tytul,wstep,zdjecie,url,kategoria,wyswietlenia FROM postyDozoba WHERE tagi LIKE "%'.$_GET['tagname'].'%" ORDER BY id DESC';
	
	//pobranie postów
	
	$result = $conn->query($sql);
	$i=0;
	echo '<div class="row">';
	while($row = $result->fetch_assoc()) {
		$i=$i+1;
		if ($i==3) {
			echo '</div><div class="row">';
			$i=1;
		}
		echo '<div class="col-xs-12 col-sm-6">';
			echo '<a href="'.$row['url'].'" >';
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
	}
	echo '</div>';

?> 