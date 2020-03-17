<?php
//email gönderimi için gerekli olan dosyaları dahil ediyoruz.
include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';

//İletişim formumuzdan gelen bilgileri alıyoruz.
$ad=$_POST['ad'];
$email=$_POST['email'];
$konu=$_POST['konu'];
$mesaj=$_POST['mesaj'];
 
$email = new PHPMailer(); //ilgili PHPMailer class'ımızdan bir nesne türetiyoruz.
$email->IsSMTP();
$email->SMTPAuth = true; 
$email->Host = 'smtp.gmail.com'; //SMTP için kullanılacak sunucu adresi
$email->Port = 587; //TLS protokolünün kullanacağı port numarası
$email->SMTPSecure = 'tls'; //kullanacağımız güvenlik protokolü SSL veya TLS olabilir.
$email->Username = 'ms8868112@gmail.com'; //Email gönderecek adres
$email->Password = '15331045Me'; ////Email gönderecek adresin şifresi
$email->SetFrom($email->Username, 'Melike ŞAHİN');
$email->AddAddress('Gidecek email adresi', '
'); //Bu emaili gideceği e-posta adresi
$email->CharSet = 'UTF-8'; //Karakterlerin düzgün görünmesi için utf-8 ekliyoruz.
$email->Subject ="Web sitesinin iletişim bölümünden mesaj var"; //emailimizin konusu

//email içeriğimiz
$icerik = "Gönderen:".$ad.
 " email:".$email.
 " konu:".$konu.
 " Mesaj:".$mesaj ;
 
$email->MsgHTML($icerik);

//Artık emailimizi gönderiyoruz, yukarıdaki bilgilerde bir hata varsa bu satırda hata verecektir.
if($email->Send()) {
     //E-posta gönderildi
     echo "Email başarıyla gönderildi";
} else {
    // Bir hata oluştu, hata mesajı yazdırıyoruz
    echo $email->ErrorInfo;
}
 
?>