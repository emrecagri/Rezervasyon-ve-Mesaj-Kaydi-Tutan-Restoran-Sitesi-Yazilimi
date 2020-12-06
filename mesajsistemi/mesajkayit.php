<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rezervasyon Sistemi</title>
<!-- Site iconu başlangıç -->
<link rel="shortcut icon" href="../sitedosyalari/resimler/ico/ico.ico" />
<!-- Site iconu bitiş -->
<!-- css dosyası oluşturdum ve dışarıdan içeri çağırdım -->
<link rel="stylesheet" type="text/css" href="../sitedosyalari/css/tasarim.css" />
<style type="text/css">
body{
  background:url("../sitedosyalari/resimler/arkaplan/6koyu.jpg");
        background-repeat:no-repeat;
      background-size: cover;
}
</style>
<!-- javascript 3.3.1 başlangıç -->
<script type="text/javascript" src="../sitedosyalari/kutuphaneler/js/jquery-3.3.1.min.js"></script>
<!-- javascript 3.3.1 bitiş -->

<!-- müzik oynatımı başlangıç -->
<script type="text/javascript">

  $(document).ready(function () {
    //Site açıldığına müziğin otomatik başlamasını istersen alttaki 2 satırı aktif et.
    //var audio = document.getElementById("music");
    //audio.play();
    $("#baslat").click(function () {
        var audio = document.getElementById("music");
        audio.play();
    })
    $("#durdur").click(function () {
        var audio = document.getElementById("music");
        audio.pause();
    })
})
</script>
  <!-- müzik oynatımı bitiş -->
  
</head>

<body>
  <!-- sağ üst müzik butonları başlangıç -->
<audio id="music" style="display:none;">
<source src="../sitedosyalari/arkaplanmuzigi/a.mp3" type="audio/mpeg">
</audio>
<div style="position: absolute; overflow: hidden; right: 1%;"> 

<a href="#" id="durdur"><img src="../sitedosyalari/resimler/durdurbeyaz.png" width="18" height="21"></a>
      &nbsp; 
<a href="#" id="baslat"><img src="../sitedosyalari/resimler/oynatbeyaz.png" width="18" height="21"></a>

</div>
<!-- sağ üst müzik butonları bitiş -->
  
<!-- txt dosyasına değişkeni yazdırma başlangıç-->
<?php

$txtdosyasi = fopen("veritabani/mesajlarveritabani.txt",'a');

if(!$txtdosyasi)
{
    echo "Hata oluştu!";
}

$ad = $_POST["ad"]; 
$soyad = $_POST["soyad"]; 
$mailadresi = $_POST["mailadresi"];
$konu = $_POST["konu"]; 
$mesaj = $_POST["mesaj"];

date_default_timezone_set('Europe/Istanbul'); // Ekleyeceği saati türkiye saati olarak ayarladık

//Gelen verileri html dili ile tablo içine koyup bir değişkene attım. Onuda txt dosyasına yazdırıcam 

$eklenecek_metin = '<table cellpadding="4px" width="300" border="1">
<tr>
<td align="right"><b>Adı Soyadı:</b> </td>
<td>  ' . $ad . ' ' .$soyad . ' </td>
</tr>
<tr>
<td align="right"><b>Mail Adresi:</b> </td>
<td>  ' . $mailadresi . '  </td>
</tr>
<tr>
<td align="right"><b>Konu:</b> </td>
<td>   ' . $konu . '  </td>
</tr>
<tr>
<td align="right" valign="top" ><b>Mesaj:</b> </td>
<td>  ' . $mesaj . '  </td>
</tr>
<tr>
<td align="right" valign="top" ><b>Gönderim Zamanı:</b> </td>
<td>  ' . date('d/m/Y - H:i') . '  </td>
</tr>
</table>';








fwrite($txtdosyasi , $eklenecek_metin);
fwrite($txtdosyasi , "<br><br>\r\n------------------------------------------------\r\n<br><br>");
fclose($txtdosyasi);
?> 
<!-- txt dosyasına değişkeni yazdırma bitiş-->

<center>
    <font color="white" face="georgia">
<!-- üst site menüsü başlangıç -->
<table width="856">
  <tr>
  <td width="143">

         <a href="../hakkimizda.html">Hakkımızda</a>
         </td>
         <td width="72">
         <a href="../menu.html">Menü</a>

    </td>
     <td width="412">
         <a href="../index.html"><img src="../sitedosyalari/resimler/logo.png" width="400" height="140"></a>
             </td>
     <td width="142">

        <a href="../rezervasyonsistemi/index.html">Rezervasyon</a>
            </td>
     <td width="63">
        <a href="../iletisim.html">İletişim</a>

     </td>
</tr></table>
<!-- üst site menüsü bitiş -->
</font>
    <font face="arial" color="white">
<br /><br />



<div style="position: absolute; overflow: hidden; left: 395px; width: 325px;">

  <h3><u><i>İletişim Formu</i></u></h3>
  


<table cellpadding="10px" border="0">
<tr>
<td align="right">Adınız: </td>
<td>  <?php echo $ad; ?>  </td>
</tr>
<tr>
<td align="right">Soyadınız: </td>
<td>  <?php echo $soyad; ?>  </td>
</tr>
<tr>
<td align="right">Mail Adresiniz: </td>
<td>  <?php echo $mailadresi; ?>  </td>
</tr>
<tr>
<td align="right">Konu: </td>
<td>   <?php echo $konu; ?>  </td>
</tr>
<tr>
<td align="right" valign="top" >Mesajınız: </td>
<td>  <?php echo $mesaj; ?>  </td>
</tr>
<tr>
<td><u><b>Mesajınız gönderildi!</b></u></td>
<td align="center">
<a href="../iletisim.html">
<input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Geri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="normalButon"></a></td>
</tr>
</table>
<p>&nbsp;</p>
</form>
</div>


<div style="position: absolute; overflow: hidden; right: 25%;">

<h3><b><u><i>Ardesimiz</i></u></b></h3>
<br />
Bu bölümde restoranın adres bilgileri yer alacaktır.

</div>
</font>
</center>
</body>
</html>
