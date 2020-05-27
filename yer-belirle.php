<?php include("connect.php") ?>
<?php include("header.php") ?>


<div class="jumbotron">
  <div class="container text-center">
      <h1 id="h4">  </h1>
  </div>
</div>

<div class="container-fluid bg-3 text-center">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group row">
      <div class="col-sm-5">
      </div>
      <div class="col-sm-2">
        <input type="text" id="yer" name="yer" class="form-control" value="" id="inputEmail3" placeholder="">
          <p id="p1" style="font-size : 20px;"></p>
      </div>
      <div class="col-sm-5">
      </div>
    </div>



    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  <div class="jumbotron">
    <div class="container text-center">
        <h3> The picture of the car park is as follows.  </h3>

    </div>
  </div>
  <div class="col-md-12">
<table class="table">

   <tr>

   </tr>



<?php

$sorgu = $baglanti->query("SELECT * FROM otoparkmusteri WHERE id =".(int)$_GET['id']);

while ($sonuc = $sorgu->fetch_assoc()) {


$resim = $sonuc['resim'];



?>


   <tr>
<img id="image" src="resimler/<?php echo $resim;?>" width="100%" height="100%" >
     </div>


   </td>

   </tr>
<?php
}
?>

</table>
  <div class="col-sm-2">
  </div>
  </div>
</div><br>

<br><br>

<footer class="container-fluid text-center">
  <p>This web site made by Sümeyye Taştan , Şevval Öztürk , Emine İlkin Adalı. </p>
</footer>
<?php

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.

    $yer = $_POST['yer'];



        if ($baglanti->query("UPDATE otoparkmusteri SET yer = '$yer' WHERE id =".$_GET['id'])){

           header("location:parkarabalar.php");

        }

        else
        {
          echo "Hata oluştu";
        }

}
?>



<script>
var image = document.getElementById('image');
var string =OCRAD(image);
console.log(image);
console.log(string);



var numbers = [];
numbers= string;
console.log(string);

/************************************************************************************************************************************/
var parkyeri=[];
count=0;
for(var i=0;i<numbers.length;i++){
  for(var e=1;e<28;e++){
    if(e==numbers[i]){
      count++;
      parkyeri[count]=e;
    /*  if(numbers[i]==1)
        {
          console.log("ikisini birden-> "+ e +" "+(e+1));
      }*/
    }
  }
}
/* elemanları tek tek ayırdık */

var yenidizi1=[];
for(var f=0;f<parkyeri.length;f++){
  yenidizi1[f]=parkyeri[f];
  if(parkyeri[f]==9){break;}
}
/* arrayi 2 ye böldük bu 1.kısım*/

console.log("yeni dizi ->"+yenidizi1);
/*var sayac=0;
for(var f=0;f<parkyeri.length;f++){
  yenidizi1[f]=parkyeri[f];
  if(parkyeri[f]>9){
     sayac++;
  }
} */
/* buda arrayin 2. parçası*/
/******************************************************************************************************************************************/
const carayi=[];
for(k=0;k<parkyeri.length;k++){
   carayi[k]=parkyeri[k];
  }

for(var p =0 ; p<carayi.length ;p++){
  const firstElement = carayi.shift();
  if(carayi[0]==9){
    const firstElement = carayi.shift();
      break;
      }
}
console.log("yeni arrayimiz -> "+carayi);
/*********************************************************************************************************************************************/
     /* şimdi 2. arayi 2 li 2 li almaya çalışacagız */
/**********************************************************************************************************************************************/
var yeninumaralar=[];
var sayici=0;
for(var m=0;m<carayi.length;m=m+2){
var  ilksayi=carayi[m];
var ikincisayi=carayi[m+1];
  ilksayi=ilksayi.toString();
  ikincisayi=ikincisayi.toString();
  var abc = ilksayi+ikincisayi;
  yeninumaralar[sayici]=ilksayi+ikincisayi;
  sayici++;
  }
  console.log("en son array -> "+yeninumaralar);
/***********************************************************************************************************************************************/
            /* Bu kısımda arrayin 2 parcasının sayılarınıda almayı başardık */
/***********************************************************************************************************************************************/
var otopark=[];
otopark=yenidizi1.concat(yeninumaralar);
console.log("otoparkin bos kisimlari -> "+otopark);

/*
//var random;
console.log("otoparkın uzunlugu"+otopark.length);
//  random=Math.floor(Math.random() * 10));
console.log(random);

  alert(Math.floor(Math.random() * 101)); // 0 ve 100 arasında sayı üretir.
*/

var sayi1=Math.floor(Math.random()*(otopark.length));
var simgonsayi=otopark[sayi1];
console.log("simulastona "+simgonsayi);
 document.getElementById("h4").innerHTML = simgonsayi+ " field is empty. Click the submit to leave it for you. ";
 document.getElementById("yer").value=simgonsayi;



/*for(var i=1;i<otopark.length;i++){
  otopark[i]= Math.floor(Math.random()*10);
}
console.log("Random sayı" +otopark[i]);
var min = otopark[1];

for(var i=0;i<otopark.length;i++){
  if(min> otopark[i]){
    min=otopark[i];
  }
}
console.log("en  kucuk sayi"+min);
*/
/* var arr=[2];
for(var o=1;o<parkyeri.length ;o++){
  console.log("parkyeri o elemanları ->"+ parkyeri[o]);
  parkyeri=parkyeri.shift();
  console.log("eksilen elemanli parkyeri"+parkyeri);
  */
//  if(parkyeri[o]==9){

  /*  arr[0]=parkyeri[o];
    arr[1]=parkyeri[o+1];
    console.log("o elemanı ->"+o+"  o+1 elemanı -> "+(o+1)); */
//  }
//  console.log("if e girmedi");

//}

/****************************************************************************************************************************************/
//for(var i =0 ; a.length ; i++){
//console.log(a[i]);
/*  if(a[i]== 4){
    console.log("4 mevcuttur" + a[i]);
  }
  else{
    console.log("Çalışmıyo");
  } */
// }


/*var array = numbers.split("P");
console.log(array);
array= array.toString();
var sayilar=array.split("_");
console.log(sayilar);
 sayilar=sayilar.toString();
var sayilarp=sayilar.split("p.");
console.log(sayilarp);
sayilarp = sayilarp.toString();
var isaret = sayilar.split("p.");
console.log(isaret);
isaret=isaret.toString();
var den = sayilar.split(",");
console.log(den);
*/


  /*  var sayilar=[];

for(var i=0;i<numbers.length;i++){
   for(var y=1;y<10; y++){
      if(y==numbers[i]){
        console.log( "if e girdi " + y);
        console.log( "sayi ekledi"+ i)
        sayilar[i] =numbers[i];
      }
    }
  }*/

    //  console.log("sayilar arrayi  "+sayilar);
    //  sayilar= sayilar.toString();
    /*  var yenisayi=[];

       yenisayi= sayilar.slice(2);
      console.log("yeni sayilar"+yenisayi);*/

    /*  for(i=0;i<sayilar.length;i++){
        console.log(sayilar[i] +" elemnıncı " +i);
      }
*/
/*
var numbers = [];
numbers= string;
console.log(string);
var array= [];
var bir= [];
var iki= [];
var a= [];
 bir = numbers.split("P");
console.log(bir);
iki = bir ;
console.log("iki : " + iki);

for(var i=0 ; iki.length ; i++){
  console.log(iki.length);
  iki.split("p");
  console.log(iki);
}
/*
a=iki.split("p");
console.log("yeni iki : " + a);*/
//iki= bir.split("_");
//array=iki;
/*array=numbers.split("p");
 array=numbers.split("_"); */
//console.log(array);


/*array.sort(function(a,b){return b-a});
console.log(array);

     console.log(numbers.indexOf("s"));
for(var i=0 ; i<numbers.length;i++){

var deneme= numbers.replace("/1/s","5");
console.log(deneme);

}*/
</script>
</body>
</html>
