<?php require_once("inc/header.php"); ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>GİRİS</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="images/logo.png">
  <link rel="apple-touch-icon" href="images/icon.png">
  <link rel="shortcut icon" type="image/png" href="images/logo/logo.png"/>


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

    <div class="login-area" style="width: 25%;">

  <form class="modal-content" action="girisi.php" method="post" style="background: #f1f1f1; margin: auto;">
      <span>GİRİŞ YAP</span>
 
      <hr>
      <label class="e-mail"><b>Kullanıcı Adı</b></label>
      <input type="text"  name="k_ad" required>

      <label class="e-mail"><b>Şifre</b></label>
      <input type="password"  name="sifre" required><br>
        <input type="submit" name="gonder" value="Giris Yap">
        <a href="ekle.php" style="text-align: center;"> yeni üyelik oluştur.</a><br>
        <hr></hr>


  

<label style="color: red; font-size: 15px; text-align: center;">
    <?php


if (isset($_POST['gonder']) && $_SERVER["REQUEST_METHOD"]=="POST")
{

$k_ad=$_POST['k_ad'];
$sifre=md5(sha1($_POST['sifre']));

  $q = $db->prepare("SELECT * FROM kullanici WHERE (k_mail = '".$k_ad."' OR nick = '".$k_ad."') AND k_sifre = '".$sifre."' Limit 1");
    if ( $q->execute() ){
      $row = $q->fetch();
      if($q->rowCount() == 0){
        echo("yalnış kullanıcı adı veya şifre");
      }else{
        $_SESSION["sifre"]=$sifre;
        $_SESSION["kullanıcı"]=$k_ad;
        Header("Location:profil.php");
      }
    }
  }
?>
</label>
</div>
    </div>
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
<?php require_once("inc/footer.php"); ?>

