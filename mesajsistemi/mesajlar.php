<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rezervasyon Sistemi</title>

<!-- Site iconu başlangıç -->
<link rel="shortcut icon" href="../sitedosyalari/resimler/ico/ico.ico" />
<!-- Site iconu bitiş -->

<link rel="stylesheet" type="text/css" href="../sitedosyalari/css/tasarim.css" />
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
</head>

<body bgcolor="black">
<font face="arial" color="white">
<center>

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
<br /><br />

<a href="../adminpaneli/admin_paneli.php">
<input type="submit" value="Admin Paneline Git" class="normalButon"></a>   

<a href="../rezervasyonsistemi/davetliler.php">
<input type="submit" value="Rezervasyon Listesine Git" class="normalButon"></a>   

<a href="javascript:printDiv('divYazdir');"><input type="submit" value="Mesajları Yazdır" class="normalButon"></a> 

<a href="eminmisin.html">
<input type="submit" value="Mesajları Sil" class="uyariButonu"></a>
<br><br><br>

<div id="divYazdir"> <!-- Yukarıda kullandığım js kodu ile yazdır butonuna basınca bu divin içini yazdıracak. Bu html kodu phpnin içinde kullanmak istersen echo '<div id="divYazdir">'; böyle yani echo ' '; içine alman lazım. -->

<font size="5"><u><em><strong>Gelen Mesajlar:</strong></em></u></font>

<br /><br /><br />

<?php


$dosya = fOpen("veritabani/mesajlarveritabani.txt" , "r"); 
$dosyaOku = fRead ($dosya , fileSize ("veritabani/mesajlarveritabani.txt")); 
echo $dosyaOku; 
fClose($dosya);
?>

..::Mesaj Listesi Sonu::..</div><hr width="500"><br />
Rezervasyon Sistemi
</center>
</font>
</body>
</html>