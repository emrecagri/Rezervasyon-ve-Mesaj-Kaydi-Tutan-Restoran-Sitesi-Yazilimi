<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rezervasyon Sistemi</title>
<!-- Site iconu başlangıç -->
<link rel="shortcut icon" href="../sitedosyalari/resimler/ico/ico.ico" />
<!-- Site iconu bitiş -->

<link rel="stylesheet" type="text/css" href="../sitedosyalari/css/tasarim.css" />

<!-- Video arkaplan başlangıç (iptal ettim)
<video autoplay loop muted>
 <source src="arkaplan/arkaplan.mp4" type="video/mp4">
</video>
<style type="text/css">
video { 
position: fixed; 
right: 0; 
bottom: 0; 
min-width: 100%; 
min-height: 100%; 
width: auto; 
height: auto; 
z-index: -100; 
background-size: cover; 
}  
</style>
-->
<!-- Video arkaplan bitiş (iptal ettim) -->

<!-- arkaplan resim başlangıç -->
<style type="text/css"> 
body {
    background: #ccc url(../sitedosyalari/resimler/arkaplan/1.png) no-repeat center center fixed;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
<!-- arkaplan resim bitiş -->

<!-- scrollbar tasarımı başlangıç -->
<style type="text/css">
::-webkit-scrollbar {
  width: 10px;
  height: 8px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #97bafb;
  border: 0px none #ffffff;
  border-radius: 36px;
}
::-webkit-scrollbar-thumb:hover {
  background: #17aaf0;
}
::-webkit-scrollbar-thumb:active {
  background: #1291cd;
}
::-webkit-scrollbar-track {
  background: #000000;
  border: 0px none #ffffff;
  border-radius: 10px;
}
::-webkit-scrollbar-track:hover {
  background: #000000;
}
::-webkit-scrollbar-track:active {
  background: #000000;
}
::-webkit-scrollbar-corner {
  background: transparent;
}
</style>

<!-- scrollbar tasarımı bitiş -->


<!-- JavaScript ile belli bir div'in arasını yazdıran kod başlangıç-->
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }        
</script>
<!-- JavaScript ile belli bir div'in arasını yazdıran kod bitiş-->




</head>

<body bgcolor="grey">
<font size="3" face="arial" color="white"> 
<center>
<?php

$txtdosyasi = fopen("veritabani/davetliler.txt",'a');

if(!$txtdosyasi)
{
    echo "Hata oluştu!";
}

$ad = $_POST["ad"]; 
$soyad = $_POST["soyad"]; 
$turu = $_POST["turu"];
$tarih = $_POST["tarih"]; 
$telefon = $_POST["telefon"]; 
$mailadresi = $_POST["mail"]; 
$misafir = $_POST["misafir"];
$id = strtoupper(substr(md5(uniqid(time())),0,8)); //strtoupper yazıyı büyük harf yapıyor - substr şifreyi belirttiğimiz kadar kısaltıyor - md5 şifre üretiyor - uniqid mikro zaman üzerindinden benzersiz 13 hane id üretir - time zamanı alır

date_default_timezone_set('Europe/Istanbul'); // Ekleyeceği saati türkiye saati olarak ayarladık




//Gelen verileri html dili ile tablo içine koyup bir değişkene attım. Onuda txt dosyasına yazdırıcam 

$eklenecek_metin = '<table cellpadding="4px" width="300" border="1">
<tr>
<td align="right"><b>Adı Soyadı:</b> </td>
<td>  ' . $ad . ' ' .$soyad . ' </td>
</tr>
<tr>
<td align="right"><b>Telefon Numarası:</b> </td>
<td>  ' . $telefon . '  </td>
</tr>
<tr>
<td align="right"><b>Mail Adresi:</b> </td>
<td>   ' . $mailadresi . '  </td>
</tr>
<tr>
<td align="right" valign="top" ><b>Misafir Sayısı:</b> </td>
<td>  ' . $misafir . '  </td>
</tr>
<tr>
<td align="right" valign="top" ><b>Rezervasyon Tarihi:</b> </td>
<td>  ' . $tarih . '  </td>
</tr>
<tr>
<td align="right" valign="top" ><b>Rezervasyon Türü:</b> </td>
<td>  ' . $turu . '  </td>
</tr>
<tr>
<td align="right" valign="top" ><b>Kayıt Zamanı:</b> </td>
<td>  ' . date('d/m/Y - H:i') . '  </td>
</tr>
<tr>
<td align="right" valign="top" ><b>Rezervasyon Kodu:</b> </td>
<td>  ' . $id . '  </td>
</tr>
</table>';








echo '<br>Rezervasyonunuz başarıyla alınmıştır.<br>Yerinizi ayırt ettirdik. Unutamayacağınız bir zamana hazır olun!<br>

<div id="divYazdir">  <!-- Yukarıda eklediğimiz divin içini yazdırma kodunun başlangıç divi -->

<br><br>

Rezervasyon bilgileriniz: <br><br> 

<table>
<tbody>
<tr>
<td>
' . $eklenecek_metin . "
</td>
</tr>
</tbody>
</table>

<br><br>";

echo ' <table border="1"><tr><td> <font size="4.5" color=#9999e6>Rezervasyon kodunuzu mutlaka not edin. Bu kod girişte sizden istenecektir.</font><br><font size="6" color=#ffff00>
 
<div id="pdf"><!--  Yukarıda eklediğimiz divin içini pdf olarak kayıt eden js kütüphanesinin başlangıç divi --> 
 
REZERVASYON KODUNUZ: ' . $id . "</font></td></tr></table><br>";
 
 
echo '</div></div><!-- Yukarıda eklediğimiz divin içini yazdırma ve pdf olarak kayıt etme işlemi yapan js kütüphanelerinin bitiş divleri -->';
?>

<!-- Mail gönderme başlangıç -->
<?php
require("../sitedosyalari/kutuphaneler/mailgondermekutuphanesi/class.phpmailer.php");
$mail = new PHPMailer(); // yeni obje oluştur
$mail->IsSMTP();
$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; // SSL sertifikanız var ise Güvenli baglanti icin ssl satırını kullanmalısınız. SSL sertifikanız yok ise bu satırı kaldırmalısınız. Gmail , hotmail gibi mail adreslerini kullanmanız durumunda SSL kısmını TLS olarak ayarlamalısınız
$mail->Host = ""; // Mail host adresiniz
$mail->Port = 465; //   Standart olarak kullanmanılması gereken port. Eğer ssl sertifikası kullanıyorsanız port olarak 465 girmelisiniz kullanmıyorsanız 587 girin.
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";

$mail->Username = ""; // Mail adresimiz
$mail->Password = ""; // Mail adresinizin şifresi
$mail->SetFrom("", "Rezervasyon sistemi");  // Mail adresiniz ve mail attigimizda gorulecek ismimiz

$mail->AddAddress($mailadresi); // Maili gonderecegimiz kisi yani alici

$mail->Subject = "Rezervasyon bilgileriniz"; // Konu basligi
$mail->Body = "Rezervasyon bilgileriniz:<br><br>" . $eklenecek_metin . "<br><br>Yukarıda yazan rezervasyon kodunuzun girişte yanınızda bulunması gerekmektedir.<br>(Bu bir demo mesajıdır.)"; // Mailin icerigi

if(!$mail->Send()){
                echo "<br><br>Rezervasyon bilgilerinizi <b>".$mailadresi . "</b> adresinize mail olarak gönderirken bir hata<br>ile karşılaştık. Bu yüzden lütfen rezervasyon kodunuzu bir yere not ediniz.<br>Hatanın ne olduğu yukarıda belirtilmiştir.";
} else {
                echo "<br><b>".$mailadresi . "</b> mail adresinize bilgilerinizi ve rezervasyon kodunuzu gönderdik. İyi eğlenceler!";
}

?>
<!-- Mail gönderme bitiş-->

<br>

<!-- txt dosyasına değişkeni yazdırma başlangıç-->
<?php
fwrite($txtdosyasi , $eklenecek_metin);
fwrite($txtdosyasi , "<br><br>\r\n--------------------------------------------------------\r\n<br><br>");
fclose($txtdosyasi);
?> 
<!-- txt dosyasına veri yazdırma bitiş-->



<br> <a href="index.html">
<input type="submit" value="Rezervasyon Sayfasına Dön" class="normalButon"></a>

<a href="javascript:printDiv('divYazdir');"><input type="submit" value="Bilgilerini Yazdır" class="normalButon"></a> <!-- Yukarıda eklediğimiz yazdırma işlemi yapan JS kodunu çalıştıran buton-->
 
 
<br /><br />
</center>
</font>
</body>
</html>