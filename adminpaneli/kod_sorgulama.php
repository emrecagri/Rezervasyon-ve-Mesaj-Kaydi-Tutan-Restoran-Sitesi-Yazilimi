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
<font color="white">
<center>


<br /><br />

<a href="admin_paneli.php">
<input type="submit" value="Admin Paneline Git" class="normalButon"></a>   

<a href="../rezervasyonsistemi/davetliler.php">
<input type="submit" value="Rezervasyon Listesine Git" class="normalButon"></a>   
  

<a href="../mesajsistemi/mesajlar.php">
<input type="submit" value="Gelen Mesajlar Sayfasına Git" class="normalButon"></a>   

<br><br><hr width="700"><br>






<!-- TXT nin içinde olup olmadığını sorgulayan kod başlangıç -->

<table border="2">
  <tr>
    <td>
      <center>

    <div class="sorgu">
      <font size="3" face="arial">
    Kod doğrulaması için 8 haneden oluşan rezervasyon kodunu hepsi büyük harf olacak şekilde girin:
      </font>
    <table width="272">
      <tr>
         <td >
      <form method="POST"> 
            <input type="text" name="q" id="q" pattern="[0-9A-Z]{8}" required class="yaziKutusu"></input> <!--pattern="[0-9a-z]{13}" 8 karakter olacak ve 0 dan 9 a veya A dan Z ye kadar karakterler kabul ediecek  -->
            </td>  
            <td>  
            <button type="sumbit" class="normalButon" >Doğrula</button> 
        </form> 
    </td>  
     </tr>  
    </table>
     

         

        <?php if($_POST){ 
            $file = '../rezervasyonsistemi/veritabani/davetliler.txt'; 
            $find = $_POST['q']; 
            $contents = file_get_contents($file); 
           $pattern = preg_quote($find, '/'); 
            $pattern = "/^.*$pattern.*\$/m"; 
            if(preg_match_all($pattern, $contents, $matches)){ 
               echo '<br><br><br><br> <img src="../sitedosyalari/resimler/gecerli.png" alt="Geçerli kod"/><br /><br /><font size="6">Geçerli kod</font>'; 
            } 
            else{ 
               echo '<br><br> <img src="../sitedosyalari/resimler/gecersiz.png" alt="Geçersiz kod"/><br /><br /><font size="6">Geçersiz kod</font>'; 
            }} ?> 
            </div>



      </center>
    </td>
  </tr>
</table>
<!-- TXT nin içinde olup olmadığını sorgulayan kod bitiş -->



<br />

</center>
</font>
</body>
</html>