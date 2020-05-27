<?php
include("connect.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

if ($_GET)
{

$sorgu = $baglanti->query("SELECT * FROM otoparkmusteri WHERE id =".(int)$_GET['id']);
//id değeri ile düzenlenecek verileri veritabanından alacak sorgu

$sonuc = $sorgu->fetch_assoc();
// id'si seçilen veriyi silme sorgumuzu yazıyoruz.

  unlink("C:/wamp/www/otopark/resimler".$sonuc["resim"]);
   echo "Dosya Silindi";
   if ($baglanti->query("DELETE FROM otoparkmusteri WHERE id =".(int)$_GET['id']))
   {

       header("location:http://localhost/otopark/parkarabalar.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
   }



}

?>
