<?php require_once("inc/header.php"); ?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KİTAP EKLE</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="images/logo.png">
  <link rel="apple-touch-icon" href="images/icon.png">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/plugins.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="melike.css">

  <link rel="stylesheet" href="css/custom.css">


  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body background="ilk.jpg " style="background-repeat: no-repeat;">


  <!-- Main wrapper -->
  <div class="wrapper" id="wrapper">
    <!-- Header -->
    <header id="wn__header" class="header__area header__absolute sticky__header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-6 col-lg-2">
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
                
                
                <li><a href="iletisim.php">İLETİŞİM</a></li>
              </ul>
            </nav>
          </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
            <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
              <li class="shop_search"><a class="search__active" href="#"></a></li>
              <li class="wishlist"><a href="#"></a></li>
              
              <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                
                <div class="searchbar__content setting__block">
                  <div class="content-inner">
                    <div class="switcher-currency">
                      <strong class="label switcher-label">
                        <a href="girisi.php"> GİRİŞ YAP</a>
  

                      </strong>
                      <div class="switcher-options">
                        <div class="switcher-currency-trigger">
                        
                          
                        </div>
                      </div>
                    </div>
                    <div class="switcher-currency">
                      <strong class="label switcher-label">
                        <a href="ekle.php"> ÜYEOL</a>
                      </strong>
                      
                    
                  </div>
                </div>
              </li>
            </ul>
          </div>
        
    
        
        

    </header>


<?php


if (isset($_POST['gonder']) && $_SERVER["REQUEST_METHOD"]=="POST")
{
	$durum = $_POST['durum'];
	$kitap_ad = $_POST['kitap_ad'];
	$yazar_id = $_POST['yazar_ad'];
	$fiyat_alis = $_POST['fiyat_alis'];
	$fiyat_satis = $_POST['fiyat_satis'];
	$kazanc = $_POST['kazanc'];
	$konu = $_POST['konu'];
	$tur = $_POST['tur'];

	$dizin = 'upload/';
	$yuklenecek_dosya = $dizin . basename($_FILES['foto']['name']);
	$foto = $_FILES['foto']['name'];

if (move_uploaded_file($_FILES['foto']['tmp_name'], $yuklenecek_dosya)){

	$q = $db->prepare("INSERT INTO kitap SET
		kitap_ad = '".$kitap_ad."',
		yazar_id = '".$yazar_id."',
		kitap_durum = '".$durum."',
		k_id = 1,
		alis = '".$fiyat_alis."',
		satis = '".$fiyat_satis."',
		konu_id = '".$konu."',
		tür_id = '".$tur."',
		kitap_foto = '".$foto."'");
	$insert = $q->execute();
	if($insert){
		echo "eklendi.";

	}else{
		echo "hatalı";
		print_r($db->errorInfo());
	}
}

}

?>

	<form action="kitapekle.php" method="post" enctype="multipart/form-data" >
<div class="ekle">
	<div class="full5">
	<span class="addbook">KİTAP EKLE</span>
	
		<div class="resyukle">
		FOTOĞRAF YÜKLE:<br>
		<input type="file" name="foto">
		</div>
<div class="durumyukle">
		DURUMU:<br> <select class="durumlar" name="durum">
			<option value="1">Yeni Ürün</option>
			<option value="2">Orta Ürün</option>
			<option value="3">Eski Ürün</option>
		</select>
		</div>
		
		<div class="kitapadyukle">
		KİTAP ADI:<BR>
		<input type="text" name="kitap_ad" value="" placeholder="kitap adı">
		</div>



		<div class="yazaryukle">
		YAZARLAR:<br>
		<select class="yazarları" name="yazar_ad">
			  <?php 
			$q = $db->prepare("SELECT * FROM yazar ORDER BY yazar_adsoyad ASC");
			    if ( $q->execute() ){
			      while ($row = $q->fetch()) {
			          echo '<option value='.$row['yazar_id'].'>'.$row['yazar_adsoyad'].'</option>'; 
			        }
			      }

			?>
			</select>
		</div>
		<div class="fiyatyukle">

		FİYAT:<br>
		<input type="text" name="fiyat_alis" placeholder="Alış Fiyatı"><br><br>
		<input type="text" name="fiyat_satis" placeholder="Satış Fiyatı"><br><br>
	
		</div>

<div class="konuyukle">
		KONU:<br> <select class="konutur" name="konu">
			 <?php 
			$q = $db->prepare("SELECT * FROM konu ORDER BY konu_ad ASC");
			    if ( $q->execute() ){
			      while ($row = $q->fetch()) {
			          echo '<option value='.$row['konu_id'].'>'.$row['konu_ad'].'</option>'; 
			        }
			      }

			?>
		</select>
		</div>


		<div class="turyukle">
		TÜR:<BR> <select class="konutur" name="tur">
						 <?php 
			$q = $db->prepare("SELECT * FROM tür ORDER BY tür_ad ASC");
			    if ( $q->execute() ){
			      while ($row = $q->fetch()) {
			          echo '<option value='.$row['tür_id'].'>'.$row['tür_ad'].'</option>'; 
			        }
			      }

			?>
		</select>
		</div>

<div class="ekleme">
<input type="submit" name="gonder" value="EKLE">


</div>

	</div>

</div>
</form>
<div class="ekleme"><a href="profil.php"><input type="submit" name="git" value="RAFIMA GİT"></a>
</div>
</body>
</html>