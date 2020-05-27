<?php
	$resim=$_POST["resim"];//adresi al
	$isim=rand();//isim yarat
	$yarat=touch($isim.".png");//resim dosyası yarat
	if($yarat){//dosya oluştuğunda
		$oku=file_get_contents($resim);//resmin içeriğini al
		$yaz=file_put_contents("C:/wamp/www/otopark/CAMERA/".$isim.".png",$oku);//oluşturduğumuz dosyaya yaz
		if($yaz and $oku){//işlem başarılı ise
			echo "Pictured saved file in CAMERA ";
		}else{
			echo "Resim oluşturulamadı.";
		}
	}
?>
