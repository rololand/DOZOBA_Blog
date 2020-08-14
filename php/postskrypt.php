
<?php
	$conn = new mysqli($servername, $username, $password, $dbname); //tworzenie polaczenia
	$conn->set_charset("utf8"); //polaczenie w polskich znakach
	// Check connection
	if ($conn->connect_error) {
		die("Polaczenie z bazą nieudane." . $conn->connect_error);
	} 
	
	//pobranie postu
	$sql = "SELECT id,data,tytul,wstep,tresc,zdjecie,url,kategoria,wyswietlenia,tagi,metaTitle,metaDescription  FROM postyDozoba WHERE id=".$_GET['id'];
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$id = $row['id'];
	$data = $row['data'];
	$tytul = $row['tytul'];
	$wstep = $row['wstep'];
	$tresc = $row['tresc'];
	$zdjecie = $row['zdjecie'];
	$image = 'http://www.dozoba.pl/upload/posty/social/'.$row['zdjecie'];
	$url = $row['url'];
	$kategoria = $row['kategoria'];
	$wyswietlenia = $row['wyswietlenia'];
	$tagi = $row['tagi'];
	//metadane
	$metatitle = $row['metaTitle'];
	$description = $row['metaDescription'];
	$keywords = "dozoba, co warto zobaczyc, blog, ".$tagi.", ".$kategoria;
	//pobranie postów polecanych
	$sql = 'SELECT id,data,tytul,wstep,zdjecie,url,kategoria,wyswietlenia FROM postyDozoba WHERE (kategoria = "'.$kategoria.'") AND (id != "'.$id.'") AND (id != "'.$_SESSION['lastpost'].'") ORDER BY id DESC LIMIT 3';
	$result = $conn->query($sql);
	$i=0;
	while($row = $result->fetch_assoc()) {
		
	  $posty[$i] = $row;
	  $i++;
	}
	
	//inkrementacja wyswietlenia
	if($_SESSION['lastpost']!=$id){
		$wyswietlenia = $wyswietlenia +1;
		$sql_update = "UPDATE postyDozoba SET wyswietlenia =".$wyswietlenia." WHERE id=".$id;
		$conn->query($sql_update);
		$_SESSION['lastpost']=$id;
	}



	

?> 