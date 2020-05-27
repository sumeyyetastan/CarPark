<?php include("connect.php") ?>
<?php include("header.php") ?>
<div class="container-fluid bg-3 text-center">
  <h3>List of Car in Car Park</h3><br>
  <div class="col-md-12">
<table class="table">

   <tr>
       <th>Id</th>
       <th>Car Licence</th>
       <th>Place</th>
       <th>Picture</th>
       <th></th>
        <th></th>
         <th></th>

   </tr>



<?php

$sorgu = $baglanti->query("SELECT * FROM otoparkmusteri");

while ($sonuc = $sorgu->fetch_assoc()) {

$id = $sonuc['id'];
$plaka = $sonuc['plaka'];
$resim = $sonuc['resim'];
$yer = $sonuc['yer'];


?>


   <tr>
       <td><?php echo $id;  ?></td>
       <td><?php echo $plaka; ?></td>
       <td><?php echo $yer; ?></td>
       <td>		<div class="post-thumbnail single-thumbnail"><img src="resimler/<?php echo $resim;?>" width="200" height="150" alt="<?php echo $sonuc['resim'];?>" class="gp-post-image">
     </div></td>
      <td><a href="yer-belirle.php?id=<?php echo $id; ?>" class="btn btn-primary">Find a Place For Car</a></td>
       <td><a href="simulasyon.php?id=<?php echo $id; ?>" class="btn btn-success">Start Simulation</a></td>
       <td><a href="araba-sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Left the Car Park</a></td>
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
<p>This web site made by Sümeyye Taştan , Şevval Öztürk , Emine İlkin Adalı.</p>
</footer>

</body>
</html>
