<?php 
session_start(); 
?>
<!DOCTYPE HTML>
<html lang="pl">
<?php
	include("php/logowaniedb.php");
	include("php/wszystkieskrypt.php");
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="https://fonts.googleapis.com/css?family=Dynalight|Open+Sans:300,400,600|Playfair+Display:400,700i" rel="stylesheet"> 
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

<!--menu-->
	<div style="position: relative; height: 100px;">
		<?php include("html/menu-html.php"); ?>
	</div>
<!--menu-end-->
	<div class="container" id="containerPosty">
		<!--content-->
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<div class="row">
						<div class="col-xs-12 col-sm-6" >
							<a href="<?php echo $posty[0]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna" ><?php echo $posty[0]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[0]['zdjecie']?>" alt="<?php echo $posty[0]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[0]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[0]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[0]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6" >
							<a href="<?php echo $posty[1]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[1]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[1]['zdjecie']?>" alt="<?php echo $posty[1]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[1]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[1]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[1]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<a href="<?php echo $posty[2]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[2]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[2]['zdjecie']?>" alt="<?php echo $posty[2]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[2]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[2]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[2]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-6">
							<a href="<?php echo $posty[3]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad h2PostGlowna"><?php echo $posty[3]['tytul']?></h2>
									<img class="img-responsive imgPostGlowna" src="upload/posty/<?php echo $posty[3]['zdjecie']?>" alt="<?php echo $posty[3]['zdjecie']?>">
									<p class="glownaAddPad"><?php echo $posty[3]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[3]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[3]['wyswietlenia']?></div>
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
							<div class="cytaty shadowNotHover">
								<h4>Cytaty</h4>
								<div class="line"></div>
								<?php include("php/cytatyskrypt.php"); ?>
								<div style="clear: both"></div>
							</div>
						</div>
					</div><!--row-->
				</div>
			</div><!--row-->
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
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
				<div class="col-xs-12 col-sm-6 col-md-4">
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
				<div class="col-xs-12 hidden-sm col-md-4">
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
		
	</div> <!--container-->
<div id="loading">loading</div>
<button type="button" class="btn btn-default wiecejButton"  id="zaladujPostyButton" onclick="zaladujPosty(<?php echo $ilewierszy?>, '<?php echo $_GET['kategoria']?>')">więcej</button>
<!--content-end-->
<!--footer-->
<div class="container-fluid footer">
	<?php include("html/footer-html.php"); ?>
</div><!--container-fluid-->
<!--footer-end-->
<script src="lightbox/js/lightbox-plus-jquery.js"></script>
<script src="js/jquery.js"></script>
<script>
	if("<?php echo $_GET['kategoria']?>"=="polska") {
		$('#polska').addClass("active menuItem");
	} else if ("<?php echo $_GET['kategoria']?>"=="europa") {
		$('#europa').addClass("active menuItem");
	} else if ("<?php echo $_GET['kategoria']?>"=="inne") {
		$('#inne').addClass("active menuItem");
	}
</script>
</body>
</html>
<?php	$conn->close();?>