<?php require_once("inc/header.php"); ?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UYE OL</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/png" href="images/logo/logo.png"/>
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

<body background="ilk2.jpg " style="background-repeat: no-repeat;">


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
                <li class="drop with--one--item"><a href="index.html">ANASAYFA</a>
                  
                </li>
                <li class="drop with--one--item"><a href="girisi.php">KEŞFET</a>
                  
                </li>
                <li class="drop"><a href="girisi.php">BİLGİLENDİRME</a>
                  
                </li>
                
                
                <li><a href="girisi.php">İLETİŞİM</a></li>
              </ul>
            </nav>
          </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
            <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
              <li class="shop_search"><a class="search__active" href="#"></a></li>
              <li class="wishlist"></li>
              
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



    <div class="login-area" style="width: 40%;">
    
     
 
      <form class="modal-content" action="ekle.php" method="post" style="background: #f1f1f1; margin: auto;">
         <span>ÜYE OL</span>
       <label class="e-mail"> İl:</label>
<select class="illogin" name="il" id="iller">
  <?php 


$q = $db->prepare("SELECT * FROM il WHERE CountryID = 212 ORDER BY CityName ASC");
    if ( $q->execute() ){
      while ($row = $q->fetch()) {
          echo '<option value='.$row['CityID'];
          if(isset($_GET['il']) && $_GET['il'] == $row['CityID']){ echo ' selected="selected" '; }
          echo '>'.$row['CityName'].'</option>'; 
        }
      }

?>
</select><br>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 <script>    
$( "#iller" ) .change(function () { 
window.location.href = "?il="+document.getElementById("iller").value;  
});  
</script>   


<label class="e-mail">İlçe:</label>
<select class="illogin" name="ilce">
    <?php 
if(isset($_GET['il'])){ $il_id = $_GET['il']; }else{ $il_id = 1; }
$q = $db->prepare("SELECT * FROM ilce WHERE CityID = ".$il_id." ORDER BY TownName ASC");
    if ( $q->execute() ){
      while ($row = $q->fetch()) {
          echo '<option value='.$row['TownID'].'>'.$row['TownName'].'</option>'; 
        }
      }
?>
</select><br>
<label class="e-mail">Kullanıcı Adı</label>
<input type="text" name="k_ad"><br>
<label class="e-mail">E-mail:</label>
<input type="text" name="mail"><br>
<label class="e-mail">Şifre:</label>
  <input type="password" name="sifre"><br>

<label class="e-mail">Adress:</label>
<input type="text" name="adress"><br>
<label class="e-mail">IBAN:</label>
<input type="text" name="iban"><br>




<input type="submit" name="gonder" value="Üye Ol">
<a href="girisi.php" style="text-align: center;"> Zaten bir hesabın var mı ? Hemen Giriş Yap.</a>

</form>


    </div>
  
</div>
<?php

if (isset($_POST['gonder']))
{


$il=$_POST['il'];
$ilce=$_POST['ilce'];

$k_ad=$_POST['k_ad'];
$mail=$_POST['mail'];
$sifre=md5(sha1($_POST['sifre']));

$adress=$_POST['adress'];
$iban=$_POST['iban'];



$ekle = $db->exec("INSERT INTO kullanici (k_mail,k_sifre,il_id,ilce_id,k_adres,k_hesapno,nick) VALUES ('$mail','$sifre','$il','$ilce','$adress','$iban','$k_ad')"); //ekleme kodu

if($ekle)

	{

	   echo 'Yeni Kayıt Eklendi.';
    

	}
	else

	{

	    echo 'Kayıt İşlemi Başarısız Olmuştur.';

	}
}

?>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</form>
</body>
</html>