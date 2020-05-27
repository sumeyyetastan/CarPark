<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title> Javascript Canvas Kullanımı </title>
</head>
<body>
  <img src="car3.png"  id="resim" style="display:none;" >
  <img src="car4.png"  id="resim1" style="display:none;" >
  <img src="car6.png"  id="resim2" style="display:none;" >
  <img src="car7.png"  id="resim3" style="display:none;" >
  <canvas id="canvas" width="1000" height="500" style="border:1px solid #ddd;">
  </canvas>



  <script type="text/Javascript">
  var hp=0;
  var vp=0;
  var dx=5;
  var dy=5;

   var canvas =document.getElementById("canvas");
   var ctx=canvas.getContext("2d");
   ctx.moveTo(100,0);
   ctx.lineTo(1000,0);

   ctx.moveTo(100,100);
   ctx.lineTo(1000,100);

   ctx.moveTo(100,0);
   ctx.lineTo(100,100);
   ctx.moveTo(200,0);
   ctx.lineTo(200,100);
   ctx.moveTo(300,0);
   ctx.lineTo(300,100);
   ctx.moveTo(400,0);
   ctx.lineTo(400,100);
   ctx.moveTo(500,0);
   ctx.lineTo(500,100);
   ctx.moveTo(600,0);
   ctx.lineTo(600,100);
   ctx.moveTo(700,0);
   ctx.lineTo(700,100);
   ctx.moveTo(800,0);
   ctx.lineTo(800,100);
   ctx.moveTo(900,0);
   ctx.lineTo(900,100);
   ctx.moveTo(1000,0);
   ctx.lineTo(1000,100);

   ctx.moveTo(0,200);
   ctx.lineTo(900,200);

   ctx.moveTo(0,300);
   ctx.lineTo(900,300);

   ctx.moveTo(0,200);
   ctx.lineTo(0,300);
   ctx.moveTo(100,200);
   ctx.lineTo(100,300);
   ctx.moveTo(200,200);
   ctx.lineTo(200,300);
   ctx.moveTo(300,200);
   ctx.lineTo(300,300);
   ctx.moveTo(400,200);
   ctx.lineTo(400,300);
   ctx.moveTo(500,200);
   ctx.lineTo(500,300);
   ctx.moveTo(600,200);
   ctx.lineTo(600,300);
   ctx.moveTo(700,200);
   ctx.lineTo(700,300);
   ctx.moveTo(800,200);
   ctx.lineTo(800,300);
   ctx.moveTo(900,200);
   ctx.lineTo(900,300);

   ctx.moveTo(100,400);
   ctx.lineTo(1000,400);

   ctx.moveTo(100,500);
   ctx.lineTo(1000,500);

   ctx.moveTo(100,400);
   ctx.lineTo(100,500);
   ctx.moveTo(200,400);
   ctx.lineTo(200,500);
   ctx.moveTo(300,400);
   ctx.lineTo(300,500);
   ctx.moveTo(400,400);
   ctx.lineTo(400,500);
   ctx.moveTo(500,400);
   ctx.lineTo(500,500);
   ctx.moveTo(600,400);
   ctx.lineTo(600,500);
   ctx.moveTo(700,400);
   ctx.lineTo(700,500);
   ctx.moveTo(800,400);
   ctx.lineTo(800,500);
   ctx.moveTo(900,400);
   ctx.lineTo(900,500);
   ctx.moveTo(1000,400);
   ctx.lineTo(1000,500);

   ctx.stroke();
             ctx.font ="40px verdana";
      ctx.fillText("1P" ,120,50);
      ctx.font ="40px verdana";
      ctx.fillText("2P" ,220,50);
      ctx.font ="40px verdana";
      ctx.fillText("3P" ,320,50);
      ctx.font ="40px verdana";
      ctx.fillText("4P" ,420,50);
      ctx.font ="40px verdana";
      ctx.fillText("5P" ,520,50);
      ctx.font ="40px verdana";
      ctx.fillText("6P" ,620,50);
      ctx.font ="40px verdana";
      ctx.fillText("7P" ,720,50);
      ctx.font ="40px verdana";
      ctx.fillText("8P" ,820,50);
      ctx.font ="40px verdana";
      ctx.fillText("9P" ,920,50);

      ctx.font ="40px verdana";
      ctx.fillText("10P" ,20,250);
      ctx.font ="40px verdana";
      ctx.fillText("11P" ,120,250);
      ctx.font ="40px verdana";
      ctx.fillText("12P" ,220,250);
      ctx.font ="40px verdana";
      ctx.fillText("13P" ,320,250);
      ctx.font ="40px verdana";
      ctx.fillText("14P" ,420,250);
      ctx.font ="40px verdana";
      ctx.fillText("15P" ,520,250);
      ctx.font ="40px verdana";
      ctx.fillText("16P" ,620,250);
      ctx.font ="40px verdana";
      ctx.fillText("17P" ,720,250);
      ctx.font ="40px verdana";
      ctx.fillText("18P" ,820,250);


      ctx.font ="40px verdana";
      ctx.fillText("20P" ,120,450);
      ctx.font ="40px verdana";
      ctx.fillText("21P" ,220,450);
      ctx.font ="40px verdana";
      ctx.fillText("22P" ,320,450);
      ctx.font ="40px verdana";
      ctx.fillText("23P" ,420,450);
      ctx.font ="40px verdana";
      ctx.fillText("24P" ,520,450);
      ctx.font ="40px verdana";
      ctx.fillText("25P" ,620,450);
      ctx.font ="40px verdana";
      ctx.fillText("26P" ,720,450);
      ctx.font ="40px verdana";
      ctx.fillText("27P" ,820,450);
      ctx.font ="40px verdana";
      ctx.fillText("28P" ,920,450);



    var resim=document.getElementById("resim");
       var resim1=document.getElementById("resim1");
      var resim2=document.getElementById("resim2");
      var resim3=document.getElementById("resim3");



      var m;
 function araba(value1,value2){

      ctx.clearRect(0,0,100,200);
      ctx.drawImage(resim1, hp,vp);
      ctx.stroke();
      vp=vp+dy;

     if(vp>=100 && vp<200){
         ctx.clearRect(0,100,1000,100);
         ctx.drawImage(resim, hp, vp);

         hp=hp+dx;
         dy=0;

         var katman=value1/10;
         katman=Math.floor(katman);
         console.log("katman"+katman);

        var bölüm=value1%10;
         var konum=bölüm*100;

         if(hp==konum && katman<2) {
             console.log("Parkı buraya yapmalısınız.")
             hp=9600;
             vp=6522;
                      }


     }
        if(hp>=900 && hp<1000 ) {
             dy=5;
             ctx.clearRect(900,100,100,300);
             ctx.drawImage(resim1, hp, vp);
             vp=vp+dy;
              dx=0;
             var katman1=value1/10;
             katman1=Math.floor(katman1);

             var bölüm1=value1%10;
             var konum1=bölüm1*100;
            console.log("2.kısım konum"+konum);
            if(konum==800){
                console.log("if e girdim");
                console.log("katman"+katman);
                console.log("vpsi:"+vp);
                console.log("hpsi"+hp);
             if(konum==800 && katman==2 && vp==195) {
                 ctx.clearRect(900,100,100,300);
                 ctx.drawImage(resim1, 900,300);
             console.log("Parkı buraya yapmalısınız.")
             hp=9600;
             vp=6522;
                      }
            }
        }
            if(hp>0 && vp>=300 && vp<400 ){
                dx=5;
                ctx.clearRect(0,300,1000,100);
                 ctx.clearRect(0,400,100,200);
                ctx.drawImage(resim2, hp, vp);
                hp=hp-dx;
                dy=0;
                 var sayi=1;
                 var sayi1=parseInt(value1);

                 var yenivalue=sayi+sayi1;
                 var yenikatman=yenivalue/10;
                 katman=Math.floor(yenikatman);
                 yenivalue=yenivalue%10;

                 var konum=yenivalue*100;
                 if(hp==konum && katman==2) {
                 console.log("Parkı buraya yapmalısınız.")
                 hp=9600;
                 vp=6522;
                      }

            }

      if(hp<=0 && vp>=300 ){

      ctx.clearRect(0,300,100,200);
      ctx.drawImage(resim3, hp, vp);
      vp=vp+dy;
      dy=5;
      dx=0;


        if(vp>=400){

            vp=10000;
            hp=50000;
        }
      }
 }
      setInterval( araba,50,"<?php echo $sonuc['yer']; ?>","100");


  </script>
</body>
</html>
