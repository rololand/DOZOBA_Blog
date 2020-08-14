<?php

	$conn = new mysqli($servername, $username, $password, $dbname); //tworzenie polaczenia
	$conn->set_charset("utf8"); //polaczenie w polskich znakach
	// Check connection
	if ($conn->connect_error) {
		die("Polaczenie z bazą nieudane." . $conn->connect_error);
	} 
	$tytul = "Co warto zobaczyć w kategorii ".$_GET['kategoria']." - DOZOBA.PL";
	$description = "Co warto zobaczyć w kategorii ".$_GET['kategoria'].". Wszystkie artykuły z wybranej kategorii";
	$image = "http://www.dozoba.pl/images/dozoba.jpg";
	$keywords = "co warto zobaczyć, dozoba";
	$sql_ilewierszy = 'SELECT COUNT(id) from postyDozoba WHERE (kategoria="'.$_GET['kategoria'].'")';
	$ilewierszy_pomocnicza = $conn->query($sql_ilewierszy);
	$ilewierszy_pomocnicza = $ilewierszy_pomocnicza->fetch_row();
	$ilewierszy = $ilewierszy_pomocnicza[0];
	if($_GET['kategoria']=='najnowsze')
		$sql = 'SELECT id,data,tytul,wstep,zdjecie,url,kategoria,wyswietlenia FROM postyDozoba ORDER BY id DESC LIMIT 10';
	else
		$sql = 'SELECT id,data,tytul,wstep,zdjecie,url,kategoria,wyswietlenia FROM postyDozoba WHERE (kategoria="'.$_GET['kategoria'].'") ORDER BY id DESC LIMIT 10';
	//pobranie postów
	
	$result = $conn->query($sql);
	$i=0;
	while($row = $result->fetch_assoc()) {
		
	  $posty[$i] = $row;
	  $i++;
	}
	

?> 