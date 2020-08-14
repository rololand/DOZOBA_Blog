<?php session_start(); 
$_SESSION['lastpost']=0;
?>
<!DOCTYPE HTML>
<html lang="pl">
<?php
	include("php/logowaniedb.php");
	include("php/home.php");
	
	if(!$_GET)	{
		$_GET['id']=1;
		$_GET['kategoria']="najnowsze";
	}
?>
<head>
	<meta charset="utf-8" />
	<title><?php echo $tytul; ?></title>
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta property="og:image" content="<?php echo $image; ?>" />
	<link rel="icon" type="image/png" href="images/dozoba.ico">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	
	<link href="https://fonts.googleapis.com/css?family=Dynalight%7COpen+Sans:300,400,600%7CPlayfair+Display:400,700i" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/rslides.css" type="text/css" />
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="lightbox/css/lightbox.css" >
	
	
</head>

<body>
<!--GOOGLE ANALYTICS-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77441709-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77441709-2');
</script>
<!--GOOGLE ANALYTICS-->
<!--header-->
	<div class="container-fluid" style="height: 100%; padding: 0px;">
		<div id="wrapper" style="height: 100%; padding: 0px;">
			<!-- Slideshow 4 -->
			<div class="callbacks_container">
			
				<ul class="rslides" id="slider4" style="height: 100%; padding: 0px;">
					<li style="height: 100%; padding: 0px;">
						<!--div class="imgSlajderCien" ></div-->
						<img src="upload/posty/hd/<?php echo $posty[0]['zdjecie']?>" alt="<?php echo $posty[0]['zdjecie']?>">
						<div class="caption">
							<h1 style="color:<?php echo $posty[0]['kolor']?>"><?php echo $posty[0]['tytul']?></h1>
							<p style="color:<?php echo $posty[0]['kolor']?>"><?php echo $posty[0]['wstep']?></p>
							<a href="<?php echo $posty[0]['url']?> " title="porzeczytaj artykuł"><div class="poczytajPrzycisk">poczytaj</div></a>
						</div>
					</li>
				
					<li style="height: 100%; padding: 0px;">
						<!--div class="imgSlajderCien" ></div-->
						<img src="upload/posty/hd/<?php echo $posty[1]['zdjecie']?>" alt="<?php echo $posty[1]['zdjecie']?>">
						<div class="caption">
							<h1 style="color:<?php echo $posty[1]['kolor']?>"><?php echo $posty[1]['tytul']?></h1>
							<p style="color:<?php echo $posty[1]['kolor']?>"><?php echo $posty[1]['wstep']?></p>
							<a href="<?php echo $posty[1]['url']?>" title="porzeczytaj artykuł"><div class="poczytajPrzycisk">poczytaj</div></a>
						</div>
					</li>
				
					<li style="height: 100%; padding: 0px;">
						<!--div class="imgSlajderCien" ></div-->
						<img src="upload/posty/hd/<?php echo $posty[2]['zdjecie']?>" alt="<?php echo $posty[2]['zdjecie']?>">
						<div class="caption">
							<h1 style="color:<?php echo $posty[2]['kolor']?>"><?php echo $posty[2]['tytul']?></h1>
							<p style="color:<?php echo $posty[2]['kolor']?>"><?php echo $posty[2]['wstep']?></p>
							<a href="<?php echo $posty[2]['url']?>" title="porzeczytaj artykuł"><div class="poczytajPrzycisk">poczytaj</div></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div><!--container-fluid-->
<!--header-end-->

	<div style="position: relative; height: 100px;">
		<?php include("html/menu-html.php"); ?>
	</div>

	<div class="container" id="containerPosty">
		<!--content-->
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<div class="row">
						<div class="col-xs-12 col-sm-6" >
							<a href="<?php echo $posty[3]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna" ><?php echo $posty[3]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[3]['zdjecie']?>" alt="<?php echo $posty[3]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[3]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[3]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[3]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6" >
							<a href="<?php echo $posty[4]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[4]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[4]['zdjecie']?>" alt="<?php echo $posty[4]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[4]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[4]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[4]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<a href="<?php echo $posty[5]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[5]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[5]['zdjecie']?>" alt="<?php echo $posty[5]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[5]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[5]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[5]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6">
							<a href="<?php echo $posty[6]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[6]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[6]['zdjecie']?>" alt="<?php echo $posty[6]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[6]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[6]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[6]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 ">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-12">
							<?php include("html/social-sidebar-html.php"); ?>
							<?php include("html/subscription-sidebar-html.php"); ?>
							<div class="tags shadowNotHover">
								<h4>Tagi</h4>
								<div class="line"></div>
								<?php include("html/tagisidebar-html.php"); ?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-12">
							<?php include("php/cytatyskrypt.php"); ?>
						</div>
					</div><!--row-->
				</div>
			</div><!--row-->
			
			<div class="row" style="position: relative">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 movieLeft">
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rSD7tCQRidk?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 movieRight">
					<div class="movieDescription">
						<h2 class="glownaAddPadMovie">Rzeszów</h2>
						<p class="glownaAddPadMovie">Przewodnik turystyczny, co warto zobaczyć w Rzeszowie</p>
						<a href="https://www.youtube.com/channel/UCns5Es0pqMlriAc9aTdLMvQ?sub_confirmation=1" target="_blank" title="subskrybuj kanał dozoba na youtube"><div class="subskrybujPrzycisk1">subskrybuj</div></a>
					</div>
				</div>
			</div><!--row-->
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="<?php echo $posty[7]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[7]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[7]['zdjecie']?>" alt="<?php echo $posty[7]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[7]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[7]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[7]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<a href="<?php echo $posty[8]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[8]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[8]['zdjecie']?>" alt="<?php echo $posty[8]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[8]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[8]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[8]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
				</div>
				<div class="col-xs-12 hidden-sm col-md-4">
					<a href="<?php echo $posty[9]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[9]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[9]['zdjecie']?>" alt="<?php echo $posty[9]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[9]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[9]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[9]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
				</div>
			</div><!--row-->
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 movieLeft2">
					<div class="movieDescription2">
						<h2 class="glownaAddPadMovie">Stargard - perła gotyku</h2>
						<p class="glownaAddPadMovie">Obejrzyj film i przekonaj się co kryje za sobą piękne polskie miasteczko!</p>
						<a href="https://www.youtube.com/channel/UCns5Es0pqMlriAc9aTdLMvQ?sub_confirmation=1" target="_blank" title="subskrybuj kanał DOZOBA na youtube"><div class="subskrybujPrzycisk2">subskrybuj</div></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 movieRight2">
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/irGVBQJ9DoU" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div><!--row-->
			
			
		
	</div> <!--container-->
<div id="loading">loading</div>
<button type="button" class="btn btn-default wiecejButton"  id="zaladujPostyButton" onclick="zaladujPosty(<?php echo $ilewierszy?>, '<?php echo $_GET['kategoria']?>')">pokaż więcej</button>
<!--content-end-->
<!--footer-->
<div class="container-fluid footer">
	<?php include("html/footer-html.php"); ?>
</div><!--container-fluid-->
<!--footer-end-->
<script src="lightbox/js/lightbox-plus-jquery.js"></script>
<script src="js/jquery.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
		// Slideshow 4
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			pause: false,  
			speed: 500,
			timeout: 7000,
			namespace: "rslides",
			prevText: "&ltrif;",   // String: Text for the "previous" button
			nextText: "&rtrif;",       // String: Text for the "next" button
		});
    });
	
</script>
</body>
</html>
<?php	$conn->close();?>