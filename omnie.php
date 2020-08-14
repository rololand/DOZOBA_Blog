<?php 
session_start(); 
?>
<!DOCTYPE HTML>
<html lang="pl">
<?php
	$tytul = "Kilka informacji i statystyk dotyczących bloga DOZOBA.PL";
	$description = "Kilka informacji i statystyk dotyczących bloga DOZOBA.PL";
	$image = "http://www.dozoba.pl/images/rololand.jpg";
	$keywords = "co warto zobaczyć, dozoba";
?>
<head>
	<meta charset="utf-8" />
	<title><?php echo $tytul; ?></title>
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
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
					<p>Just for fun!</p>
					<p>Więcej informacji już wkrótce - ten dział jest w przygotowaniu.</p>
					
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
					</div><!--row-->
				</div>
			</div><!--row-->
	</div> <!--container-->

<!--content-end-->
<!--footer-->
<div class="container-fluid footer">
	<?php include("html/footer-html.php"); ?>
</div><!--container-fluid-->
<!--footer-end-->
<script src="lightbox/js/lightbox-plus-jquery.js"></script>
<script src="js/jquery.js"></script>
<script>
	$('#o-mnie').addClass("active menuItem");
</script>
</body>
</html>