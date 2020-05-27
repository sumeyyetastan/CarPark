<?php include("header.php") ?>


<div class="jumbotron">
  <div class="container text-center">
    <h1>CAMERA</h1>
    <p>Take and save the picture ...</p>
    <button id="btn1">Open the Camera</button>
  </div>
</div>

<div class="container-fluid bg-3 text-center">
  <h3></h3><br>
  <div class="row">
    <div class="col-sm-6">
      <p>Camera</p>
      <video id="video" width="100%"  autoplay></video>
      <button id="snap">Snap Photo</button>
    </div>
    <div class="col-sm-6">
      <p>Resim</p>
      <canvas id="canvas" width="640" height="480" ></canvas>
      <br/>
      <a href=index.php><button id="kayit">Save the Picture</button></a>
    </div>
  </div>
</div><br>

<br><br>

<script>
var btn1=document.querySelector("#btn1");

btn1.onclick=function(){
     var video = document.getElementById('video');


if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {

navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {

    video.srcObject = stream;
    video.play();
});
}


var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');


document.getElementById("snap").addEventListener("click", function() {
context.drawImage(video, 0, 0, 640, 480);
});
}
</script>
</body>
</html>


<footer class="container-fluid text-center">
  <p>This web site made by Sümeyye Taştan , Şevval Öztürk , Emine İlkin Adalı.</p>
</footer>
<!-- ************************************************************  -->
<script>
var btn1=document.querySelector("#btn1");

btn1.onclick=function(){
     var video = document.getElementById('video');


if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {

navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {

    video.srcObject = stream;
    video.play();
});
}


var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

var rx =0,
ry =0,//resimin başlama konumu
genislik =600,
yukseklik =400,//resmin boyutları
resimveri,//resmin ilk veriler
veri;//tüm verileri depolayacağımız değişken





  $("#kayit").click(function(){//kayita basılırsa
    var ck = canvas.toDataURL();//canvası resim urlesi yap.

    $.post("kayit.php",{"resim":ck},function(sonuc){
      alert(sonuc)
    })
  })


document.getElementById("snap").addEventListener("click", function() {
context.drawImage(video, 0, 0, 640, 480);
});
}
</script>
<!-- ************************************************************  -->


</body>
</html>
