<?php 

include 'header.php';


$dernegimizsor=$db->prepare("select * from dernegimiz");
$dernegimizsor->execute(array(0));
$dernegimizcek=$dernegimizsor->fetch(PDO::FETCH_ASSOC);

?>
<br>
<section class="page-title small gray-bg">
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
        <h1><?php echo $dernegimizcek['dernegimiz_baslik']; ?></h1>
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
<section class="white-bg page-section-ptb">
    <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-8">
         <div class="text-center">
          <h2 class="mb-30"><?php echo $dernegimizcek['dernegimiz_baslik']; ?></h2>
          <p> <?php echo $dernegimizcek['dernegimiz_icerik']; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="col-md-12">


  <div class="card mb-12">
    <img class="card-img-top" src="<?php echo $dernegimizcek['dernegimiz_yol']; ?>" alt="Card image cap">

  </div>  
</div>

</div>

</div>
<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>