<?php require_once("inc/header.php"); ?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>İLETİŞİM</title>
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
                <li class="drop with--one--item"><a href="kesfet.php">KEŞFET</a>
                  
                </li>
                <li class="drop"><a href="shop-grid.html">BİLGİLENDİRME</a>
                  
                </li>
                
                
                <li><a href="iletisim.php">İLETİŞİM</a></li>
              </ul>
            </nav>
          </div>
         
                      
                    
                  </div>
                </div>
              </li>
            </ul>
          </div>

        
    
        
        

    </header>



    <div class="login-area" style="width: 40%;">
    
     
 
      <form class="modal-content" action="mail.php" method="post" style="background: #f1f1f1; margin: auto;">
 
<span>BİZİMLE İLETİŞİME GEÇİN.</span>
<label class="e-mail">Kullanıcı Adı</label>
<input type="text" name="ad"><br>
<label class="e-mail">E-mail:</label>
<input type="text" name="email"><br>
<label class="e-mail">KONU:</label>
  <input type="text" name="konu"><br>
<label class="e-mail">MESAJINIZ:</label>
<textarea  name="mesaj" style="  width: 65%;
  padding: 7px;
  margin-left: 45px;"></textarea>




<input type="submit" name="gonder" value="MESAJ GÖNDER">
<a href="ekle.php" style="text-align: center;">ÜYE OL.</a>

</form>


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