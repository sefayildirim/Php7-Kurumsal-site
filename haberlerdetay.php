<?php 
include 'header.php';
include 'admin/baglan.php';

$haberlersor=$db->prepare("SELECT * from haberler where haberler_id=:haberler_id");
$haberlersor->execute(array(
  'haberler_id' => $_GET['haberler_id']
));
$haberlercek=$haberlersor->fetch(PDO::FETCH_ASSOC);

?>
<section class="page-title small gray-bg">
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
        <h1>Haberler</h1>
      </div>
      
    </div>
  </div> 
</div>
</section>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <img class="card-img-top" src="<?php echo $haberlercek['haberler_yol']; ?>" alt="Card image cap">
      <br>
      <br>
      <p>
          <h1 style="text-align: center;"><?php echo $haberlercek['haberler_baslik']; ?></h1>
        <?php echo $haberlercek['haberler_detay']; ?>
      </p>
    </div>
  </div>
      
 
</div>
</div>
<br>
<br>
<br>




<?php include 'footer.php'; ?>
