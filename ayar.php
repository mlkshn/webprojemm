<?php
ob_start();
try {
     $db = new PDO("mysql:host=localhost;dbname=raf", 'root','');
     global $db;
} catch ( PDOException $e ){
     print $e->getMessage();
}
session_start();

if (isset($_SESSION['kullanıcı']))
{

$k_ad=$_SESSION['kullanıcı'];
$sifre=$_SESSION['sifre'];

  $q = $db->prepare("SELECT * FROM kullanici WHERE (k_mail = '".$k_ad."' OR nick = '".$k_ad."') AND k_sifre = '".$sifre."' Limit 1");
    if ( $q->execute() ){
      $row = $q->fetch();
      if($q->rowCount() == 0){
        require_once("cikis.php");
      }else{
        $_SESSION['k_id'] = $row['k_id'];
      }
    }
}else{
	/*if($_SERVER['PHP_SELF'] == "/raf2.hazir/girisi.php"){
		require_once("cikis.php");
	}*/
}


?>