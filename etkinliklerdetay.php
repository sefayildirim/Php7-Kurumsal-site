<?php 
include 'header.php';
include 'admin/baglan.php';

$etkinliklersor=$db->prepare("SELECT * from etkinlikler where etkinlikler_id=:etkinlikler_id");
$etkinliklersor->execute(array(
  'etkinlikler_id' => $_GET['etkinlikler_id']
));
$etkinliklercek=$etkinliklersor->fetch(PDO::FETCH_ASSOC);

?>
<section class="page-title small gray-bg">
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
        <h1><?php echo $etkinliklercek['etkinlikler_baslik']; ?></h1>
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
      <img class="card-img-top" src="<?php echo $etkinliklercek['etkinlikler_yol']; ?>" alt="Card image cap">
      <br>
      <br>
      <p>
          <h1 style="text-align: center;"><?php echo $etkinliklercek['etkinlikler_baslik']; ?></h1>
        <?php echo $etkinliklercek['etkinlikler_icerik']; ?>
      </p>
    </div>
  </div>
      
 
</div>
</div>
<br>
<br>
<br>










<?php include 'footer.php'; ?>
