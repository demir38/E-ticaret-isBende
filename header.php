<?php 
include 'nedmin/netting/baglan.php';

$kullanicisor=$db-> prepare("SELECT * FROM kullanici order by kullanici_id asc limit 5");
$kullanicisor -> execute(array(
));

$kategorisor=$db-> prepare("SELECT * FROM kategori ");
$kategorisor -> execute(array(
));

$gorevsor=$db-> prepare("SELECT * FROM gorev ");
$gorevsor -> execute(array(
));

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda ");
$hakkimizdasor->execute(array(
	
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


$ayarsor=$db-> prepare("SELECT * FROM ayar");
$ayarsor -> execute(array(
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>İş Bende</title>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
	<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css?">
	
	<!-- owl Style -->
	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">
	
</head>
<body>
	<div id="wrapper">
		<div class="header"><!--Header -->
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-md-4 main-logo">
						<a href="index.php"><img src="images\logo.png" alt="logo" class="logo img-responsive"></a>

					</div>

					<div class="col-md-8">

						<div class="pushright">
							<div class="top">
								<a href="#" id="reg" class="btn btn-default btn-dark">Giriş Yap<span>-- yada --</span>Kayıt Ol</a>
								<div class="regwrap">
									<div class="row">
										<div class="col-md-6 regform">
											<div class="title-widget-bg">
												<div class="title-widget">Giriş Yap</div>
											</div>
											<form action="nedmin/netting/islem.php" method="POST" role="form">
												<div class="form-group">
													<input type="text" class="form-control" name="kullanici_mail" id="username" placeholder="Kullanıcı Adınız(Mail Adresiniz)">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" 
													name="kullanici_password" id="password" placeholder="Şifreniz">
												</div>
												<div class="form-group">
													<button type="submit" name="kullanicigiris" class="btn btn-default btn-red btn-sm">Giriş</button>
												</div>
											</form>
										</div>
										<div class="col-md-6">
											<div class="title-widget-bg">
												<div class="title-widget">Kayıt Ol</div>
											</div>
											<p>
												Kayıt OL
											</p>
											<a href="register"><button class="btn btn-default btn-yellow">Şimdi Kayıt Ol</button></a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-sm-8 col-sm-pull-2">
							<ul class="small-menu"><!--small-nav -->

								<li><a href="" class="mychart">Görevler</a></li>
								<li><a  href="hakkimizda.php"  class="mychart" >Hakkımızda</a></li>
								<li><a href="iletisim.php" class="mychart">İletişim</a></li>

							</ul><!--small-nav -->	
						</div>
					</div>
				</div>
			</div>
			<div class="dashed"></div>
		</div><!--Header -->
		