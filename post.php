<?php 
	session_start(); 
?>
<!DOCTYPE HTML>
<html lang="pl">
<?php
	include("php/logowaniedb.php");
	include("php/postskrypt.php");
	function kategoria($kategoria) {
		if ($kategoria=="madrzesie") {
			$kategoria_pl="MĄDRZĘ SIĘ";
		}
		elseif ($kategoria=="nacodzien") {
			$kategoria_pl="NA CO DZIEŃ";
		}
		elseif ($kategoria=="przygoda") {
			$kategoria_pl="PRZYGODA";
		}
		else {
			$kategoria_pl= $kategoria;
		}
		
		return $kategoria_pl;
	}
?>
<head>
	<meta charset="utf-8" />
	
	<title><?php echo $metatitle; ?></title>
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
	<meta property="og:image" content="<?php echo $image; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<link rel="icon" type="image/png" href="images/dozoba.ico">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	
	<link href="https://fonts.googleapis.com/css?family=Dynalight|Open+Sans:300,400,600|Playfair+Display:400,700i" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/post.css" type="text/css" />
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
	<div style="position: relative; height: 50px">
		<?php include("html/menu-html.php"); ?>
	</div>
<!--menu-end-->
	<div class="container containerPadding">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h1><?php echo $tytul?></h1>
					<div class="metaDanePost">
						<?php echo $data?>, <a href="<?php echo $kategoria ?>"><?php echo kategoria($kategoria) ?></a>, <i class="icon-eye znacznikPost"></i><?php echo $wyswietlenia?>
					</div>
					
					<a class="postimg" href="upload/posty/hd/<?php echo $zdjecie?>" data-lightbox="post-set" data-title=""><img class="post-image" id="postimgMain" src="upload/posty/hd/<?php echo $zdjecie?>" alt=""/></a>
				</div>
			</div><!--row-->
		<!--content-->
			<div class="row divRowPostPage">
				<div class="col-sm-12 col-md-8">
					<div class="sharesocial">
						Dzielenie się jest fajne:
						<a class="sharelinkfb" href="https://www.facebook.com/sharer/sharer.php?u=http://www.dozoba.pl/<?php echo $url?>" title="share on facebook" target="_blank"><i class="icon-facebook"></i></a>&nbsp;
						<a class="sharelinkgp" href="http://plus.google.com/share?url=http%3A%2F%2Fwww.dozoba.pl%2F<?php echo $url?>" title="share on google+" target="_blank"><i class="icon-gplus"></i></a>&nbsp;
						<a class="sharelinktw" href="http://twitter.com/home?status=<?php echo $metatitle?> http://www.dozoba.pl/<?php echo $url?>" title="share on twitter" target="_blank"><i class="icon-twitter"></i></a>&nbsp;
						<a class="sharelinktb" href="http://tumblr.com/widgets/share/tool?canonicalUrl=http://www.dozoba.pl/<?php echo $url?>" title="share on tumblr" target="_blank"><i class="icon-tumblr"></i></a>
					</div>
					<h3><?php echo $wstep?> </h3>
					<div id="tresc"><?php echo $tresc?> </div>
					<div id="podpis">Dzięki, że przeczytałeś. Piona!<br /><span>Roland</span></div>
					<p>PS ten artykuł jest wart polecenia innym:</p>
					<div class="sharesocial">
						<a class="sharelinkfb" href="https://www.facebook.com/sharer/sharer.php?u=http://www.dozoba.pl/<?php echo $url?>" title="share on facebook" target="_blank"><i class="icon-facebook"></i></a>&nbsp;
						<a class="sharelinkgp" href="http://plus.google.com/share?url=http%3A%2F%2Fwww.dozoba.pl%2F<?php echo $url?>" title="share on google+" target="_blank"><i class="icon-gplus"></i></a>&nbsp;
						<a class="sharelinktw" href="http://twitter.com/home?status=<?php echo $metatitle?> http://www.dozoba.pl/<?php echo $url?>" title="share on twitter" target="_blank"><i class="icon-twitter"></i></a>&nbsp;
						<a class="sharelinktb" href="http://tumblr.com/widgets/share/tool?canonicalUrl=http://www.dozoba.pl/<?php echo $url?>" title="share on tumblr" target="_blank"><i class="icon-tumblr"></i></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<?php include("html/social-sidebar-html.php"); ?>
							<?php include("html/subscription-sidebar-html.php"); ?>
						</div>
					</div><!--row-->
				</div>
			</div><!--row-->
			
			
			
			
			
			
			
			
		
	</div> <!--container-->


<div id="reklamaNaDoleStronyPost">
<div class="row">
	<div class="container">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<a href="<?php echo $posty[0]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad"><?php echo $posty[0]['tytul']?></h2>
									<img class="img-responsive" src="upload/posty/<?php echo $posty[0]['zdjecie']?>" alt="Error: Photo isn't loaded.">
									<p class="glownaAddPad"><?php echo $posty[0]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[0]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[0]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<a href="<?php echo $posty[1]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad"><?php echo $posty[1]['tytul']?></h2>
									<img class="img-responsive" src="upload/posty/<?php echo $posty[1]['zdjecie']?>" alt="Error: Photo isn't loaded.">
									<p class="glownaAddPad"><?php echo $posty[1]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[1]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[1]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<a href="<?php echo $posty[2]['url']?>" >
								<div class="shadow">
									<h2 class="glownaAddPad"><?php echo $posty[2]['tytul']?></h2>
									<img class="img-responsive" src="upload/posty/<?php echo $posty[2]['zdjecie']?>" alt="Error: Photo isn't loaded.">
									<p class="glownaAddPad"><?php echo $posty[2]['wstep']?></p>
									<div class="metaDaneHome">
										<div class="dataPostHome"><?php echo $posty[2]['data']?></div>
										<div class="viewsPostHome"><i class="icon-eye znacznikHome"></i><?php echo $posty[2]['wyswietlenia']?></div>
									</div>
								</div>
							</a>
						</div>
					</div><!--row-->
	</div>
</div>


<!--content-end-->
<!--footer-->
<div class="container-fluid footer">
	<?php include("html/footer-html.php"); ?>
</div><!--container-fluid-->
<!--footer-end-->

<script src="lightbox/js/lightbox-plus-jquery.js"></script>
<script src="js/jquery.js"></script>

</body>
</html>
<?php	$conn->close();?>