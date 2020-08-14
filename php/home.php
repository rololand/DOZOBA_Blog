<?php

	$conn = new mysqli($servername, $username, $password, $dbname); //tworzenie polaczenia
	$conn->set_charset("utf8"); //polaczenie w polskich znakach
	// Check connection
	if ($conn->connect_error) {
		die("Polaczenie z bazą nieudane." . $conn->connect_error);
	} 

	$tytul = "Co waro zobaczyć - blog DOZOBA.PL";
	$description = "Co warto zobaczyć - czyli blog DOZOBA.PL - baza informacji co warto zobaczyć, zwiedzić i gdzie szukać atrakcji turystycznych podczas podróży. Polski kanał YouTube z poradami dla wszystkich szukających wrażeń podczas urlopu. ";
	$image = "http://www.dozoba.pl/images/dozoba.jpg";
	$keywords = "co warto zobaczyć, dozoba, blog, podróże, atrakcje turystyczne, porady, co zwiedzić, przewodnik w podróży, kanał YouTube, dozoba.pl";
	$sql_ilewierszy = 'SELECT COUNT(id) from posty';
	$ilewierszy_pomocnicza = $conn->query($sql_ilewierszy);
	$ilewierszy_pomocnicza = $ilewierszy_pomocnicza->fetch_row();
	$ilewierszy = $ilewierszy_pomocnicza[0];
	
	//pobranie postów
	$sql = 'SELECT id,data,tytul,wstep,zdjecie,url,kategoria,wyswietlenia,kolor FROM postyDozoba ORDER BY id DESC LIMIT 10';
	$result = $conn->query($sql);
	$i=0;
	while($row = $result->fetch_assoc()) {
		
	  $posty[$i] = $row;
	  $i++;
	}
	

?> 