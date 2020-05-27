<?php
include("connect.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.
?>
<?php
 if($_POST)
    if($_FILES["resim"]["size"]<5120*5120){

      if($_FILES["resim"]["type"]=="image/jpeg" or "image/jpg" or "image/png"){
        function replace_tr($text) {
   $text = trim($text);
   $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
   $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
}
          $dosya_ad=$_FILES["resim"]["name"];
          $uzanti=substr($dosya_ad,-4,4);
          $yeniresimadi=replace_tr($dosya_ad);
          $image_name="C:/wamp/www/otopark/resimler/".$yeniresimadi;
          if (move_uploaded_file($_FILES["resim"]["tmp_name"],$image_name)){
            echo 'Resim Dosyası Başarıyla Yüklendi';
          }
          else {
            echo 'Dosya Yüklenemedi';
          }
      }
      else{
        echo 'Dosya jpeg-jpg-png türlerinden birisi olmalıdır';
      }
    }
    else{
      echo'Dosya boyutu 3 mb ı geçemez!';
    }
?>


<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Plaka</label>
    <div class="col-sm-10">
      <input type="text" name="plaka" class="form-control" id="inputEmail3" placeholder="License Plate">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Picture</label>
    <div class="col-sm-10">
      <input type="file"  name="resim" class="form-control" id="inputPassword3" placeholder="Picture">
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

       <?php

                    if ($_POST) {


                       $plaka = $_POST['plaka'];
                       //$resim = $_POST['resim'];
                    //   $yer = $_POST['yer'];




                         if ($baglanti->query("INSERT INTO otoparkmusteri (plaka,resim ) VALUES ('$plaka','$yeniresimadi')"))  {
                                 
                         }
                           else {
                               echo "Hata oluştu"; }



                    }

                    ?>
