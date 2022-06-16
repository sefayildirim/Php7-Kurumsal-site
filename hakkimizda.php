<?php 

include 'header.php';


$hakkimizdasor=$db->prepare("select * from hakkimizda");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>
<br>
<section class="page-title small gray-bg">
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
        <h1><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h1>
      </div>
      
    </div>
  </div> 
</div>
</section>
<!--=================================
 header -->

<!--=================================
 rev-slider -->
 <br>
 <div class="container">
  <div class="row">
    <div class="col-md-6">

      <br>
      <br>
      <div class="card mb-12">
        <img class="card-img-top" src="<?php echo $hakkimizdacek['hakkimizda_yol']; ?>" alt="Card image cap">

      </div>  
    </div>
    <div class="col-md-6">
      <h3 style="text-align: left;"><?php echo $hakkimizdacek['hakkimizda_baslik2']; ?></h3>

      <p>
        <?php echo $hakkimizdacek['hakkimizda_icerik']; ?>

      </p>
    </div>
  </div>

</div>
<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>