# Rezervasyon ve Mesaj Kaydı Tutan Restoran Sitesi

PHP, JS, HTML ve CSS kullanarak yapıldı.

---

Bu demo projede admin paneli kullanıcı adı ve şifre gibi bilgiler istemeden doğrudan açılacaktır.
Mobil uyumlu tasarımı yoktur.

---

Projede rezervasyoları ve mesajları tutması için bir sql veritabanı kullanmadım onun yerine bilgileri txt dosyasına yazan, okuyan ve silen bir kod yazdım.
Bu sebeple sql kurulumu yapılmasına gerek olmadan yalnızda php sunucusu ile çalışabilecektir.

Rezervasyonların karışma ihtimali minimuma düşürmek için rezerve yapan her müşteriye benzersiz bir rezervasyon kodu tanımlanıp müşteriye
bildirmektedir.

Ayrıca müşteri rezervasyon yaparken yazdığı mail adresine otomatik
olarak rezervasyon bilgilerini ve rezervasyon kodunu mail olarak gönderiyor.
Mail gönderim sisteminin çalışabilmesi için rezervasyonsistemi/ekle.php dosyasında mail ayarlamalarının yapılması gerekmektedir. Yoksa hata alınır.

Bunun yanında yazdır butonuna basılması takdirde tüm siteyi yazdırmak yerine yalnızca
gerekli bilgileri yazdıran bir kod entegre ettim.

Admin paneli arayüzünü kolay kullanım açısından olabildiğince sade tuttum.
Bu yönetim panelide yapılan tüm rezervasyonlar ve gönderilen tüm mesajlar okuyabilecek ayrıca rezervasyon kodlarını sorgulanarak geçerli olup olmadığını da rahatlıkla görülebilecektir.

Yine admin paneli üzerinden alınan rezervasyonları veya gönderilen mesajları yazdırılabilecek ve silinebilecektir.

---

# Ekran Görüntüleri:

<img src="Screenshots/Ekran Görüntüsü (205).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (206).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (207).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (208).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (209).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (210).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (211).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (212).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (213).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (214).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (215).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (216).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (217).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (218).png" height="450">
<img src="Screenshots/Ekran Görüntüsü (219).png" height="450">