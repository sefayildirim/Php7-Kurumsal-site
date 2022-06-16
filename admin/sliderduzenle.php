<?php 
include 'header.php';
include 'baglan.php';

$slidersor=$db->prepare("SELECT * from slider where slider_id=:slider_id");
$slidersor->execute(array(
  'slider_id' => $_GET['slider_id']
));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
       <form action="islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      <div align="right" class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
        <button  type="submit" name="sliderduzenle" class="btn btn-primary">
          <i class="fas fa-save"></i>
        </button>
        <a href="slider.php"><span class="btn btn-secondary">
          <i class="fas fa-undo"></i></span>
        </a>
        <hr>
      </div>
     

        <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü resim<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <img width="200" height="100" src="../<?php echo $slidercek['slider_yol']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="first-name"  name="slider_slideryol"  class="form-control col-md-7 col-xs-12">
          </div>
        </div>


  

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider sıra<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" required="required" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
           <select id="heard" class="form-control" name="slider_durum" required>

            <?php 
            if ($slidercek['slider_durum']==1) {?>

              <option value="1">Aktif</option>
              <option value="0">Pasif</option>

            <?php } else {?>

              <option value="0">Pasif</option>
              <option value="1">Aktif</option>

            <?php } ?>

          </select>
        </div>
      </div>

    </form>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>


<?php include 'footer.php'; ?>
