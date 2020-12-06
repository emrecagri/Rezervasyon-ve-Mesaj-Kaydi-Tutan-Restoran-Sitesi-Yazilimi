<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rezervasyon Sistemi</title>
<!-- Site iconu başlangıç -->
<link rel="shortcut icon" href="../sitedosyalari/resimler/ico/ico.ico" />
<!-- Site iconu bitiş -->
<link rel="stylesheet" type="text/css" href="../sitedosyalari/css/tasarim.css" />
</head>

<body bgcolor="black">
<font color="white" size="5">
<center>
<br /><br /><br /><br /><br /><br />

<?php
$dosya = fopen('veritabani/mesajlarveritabani.txt', 'w'); //w dosyayı yazmak için açar ve içindeki yazıları siler.
fclose($dosya);
echo "GELEN MESAJLAR LİSTESİ BAŞARIYLA SIFIRLANDI.";
?>

<br /><br /><br />
<a href="../index.html">
<input type="submit" class="normalButon" value="Ana Sayfaya Git"></a>

</center>
</font>
</body>
</html>