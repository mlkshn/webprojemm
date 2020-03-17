<?php require_once("inc/header.php"); ?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/boighor-preview/boighor/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Dec 2019 21:27:54 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Profil</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
<link rel="shortcut icon" type="image/png" href="images/logo/logo.png"/>

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<!-- Header -->
		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
						<div class="logo">
							<a href="index.html">
								<img src="images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>

					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="index2.php">ANASAYFA</a>
									
								</li>
								<li class="drop with--one--item"><a href="kesfet.php">KEŞFET</a>
									
								</li>
								<li class="drop"><a href="shop-grid.html">BİLGİLENDİRME</a>
									
								</li>
								<li class="drop"><a href="iletisim.php">İLETİŞİM</a>
									
								</li>								
							</ul>
						</nav>
					</div>

					
			
			</div>
		</header>
	
	
		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area bg-image--4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">PROFİL</h2>
							
						</div>
					</div>
				</div>
			</div>
		</div>	
 <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar" style="margin: -30px;">
	                            <img src="profil.jpg" width="200" height="200" ></img>
	                        </div><br><br>
	                       <center><div class="ort">
	                            <h3 class="name5">
	                            	<?php
						$q = $db->prepare("SELECT * FROM kullanici WHERE k_id = ".$_SESSION['k_id']." Limit 1");
    if ( $q->execute() ){
      while ($row = $q->fetch()) {
      	

      	echo '


					<!-- Start Single Product -->
					<div>
						
				      
							<h4>'.$row['nick'].'</h4>
							
							
					</div>
					<!-- Start Single Product -->';

        }
      }

?>




	                            </h3><br>
								<h6 class="name6">  <a href="">80 takipçi</a> <a href=""> &nbsp &nbsp 10 takip edilen</a><br></h6>
								<a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a></center> 
	                        </div>
	                    </div>
    	            </div>
                </div>
                <div class="description text-center">
                	
                    <a href="kitapekle.php"><input type="submit" name="kitapekle" value="Kitap Ekle" style="  width: 11%;padding: 15px;background: #81562d;color: #fff; margin-bottom: 35px;border-radius: 20px;"></a>
                  
                </div>
                <hr></hr><br>
				
				<div class="kitaplıgım" style="text-align: center;"> 

					<input type="submit" name="" value="RAFIM" style="  background: #7f5329;
    color: #fff;
    width: 16%;
    padding: 12px; ">
					<input type="submit" name="" value="SATTIKLARIM" style="  background: #7f5329;
    color: #fff;
    width: 16%;
    padding: 12px;">
					<input type="submit" name="" value="FAVORİLER" style="  background: #7f5329;
    color: #fff;
    width: 16%;
    padding: 12px;">

				</div>


          
    	    	
    	    	<div class="clear-fix"></div>
    	    	<br>
    	    	<div class="clear-fix"></div>

    	    	<div class="kipatlar" style=" width: 90%; margin:auto;">
    	    	<?php











	$c = $db->prepare("SELECT * FROM kitap WHERE k_id =".$_SESSION['k_id']." ORDER By kitap_ad ASC");
    if ( $c->execute() ){
      while ($row = $c->fetch()) {
      	$q = $db->prepare("SELECT * FROM kullanici WHERE k_id = ".$_SESSION['k_id']." Limit 1");
      		 if ( $q->execute() ){
      			$row2 = $q->fetch();


      	echo '
					<!-- Start Single Product -->
					<div class="product product__style--3" style="width: 25%;
    float: left;">
    					<!-- Start Single Product -->
					<div style="width:10%;">
						
				      
							
							
							
					</div>
					<!-- Start Single Product -->
						<div class="product__thumb">


							<a class="first__img" href="single-product.html"><img style="max-width:250px !important;" src="upload/'.$row['kitap_foto'].'"
									alt="product image"></a>
							<a class="second__img animation1" href="single-product.html"><img  style="max-width:250px !important;"  
									src="upload/'.$row['kitap_foto'].'" alt="product image"></a>
							<div class="hot__box">
								<span class="hot-label">'.$row2['nick'].'</span>
							</div>
						</div>
				      	<div class="product__content content--center">
							<h4><a href="javascript:;">'.$row['kitap_ad'].'</a></h4>

							<ul class="prize d-flex">
								<li>'.$row['alis'].'</li>
								<li class="old_prize">'. $row['satis'] .'</li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										
										<li><a class="wishlist" href="wishlist.html"><i
													class="bi bi-shopping-cart-full"></i></a></li>
										<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
										
									</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->';

        }
      }
}
?>

            </div>
            </div>

		

</body>


<!-- Mirrored from demo.hasthemes.com/boighor-preview/boighor/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Dec 2019 21:27:57 GMT -->
</html>