<?php 
include 'header.php';
include 'baglan.php';

$videosor=$db->prepare("SELECT * from video where video_id=:video_id");
$videosor->execute(array(
  'video_id' => $_GET['video_id']
));
$videocek=$videosor->fetch(PDO::FETCH_ASSOC);

?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      <br>
      <form action="islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      <div align="right" class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
        <button  type="submit" name="videoduzenle" class="btn btn-primary">
          <i class="fas fa-save"></i>
        </button>
        <a href="videogaleri.php"><span class="btn btn-secondary">
          <i class="fas fa-undo"></i></span>
        </a>
        <hr>
      </div>
      <br>

        <input type="hidden" name="video_id" value="<?php echo $videocek['video_id']; ?>">


        <div class="form-group">
          <label class="control-label col-md-12 col-sm-12 col-xs-12" for="first-name">Video url<span class="required">*</span>
          </label>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text" id="first-name" required="required" name="video_url" value="<?php echo $videocek['video_url']; ?>" class="form-control col-md-12 col-xs-12">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-12 col-sm-12 col-xs-12" for="first-name">video sıra<span class="required">*</span>
          </label>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text" id="first-name" required="required" name="video_sira" value="<?php echo $videocek['video_sira']; ?>" class="form-control col-md-12 col-xs-12">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-12 col-sm-12 col-xs-12" for="first-name">Video Durum<span class="required"></span>
          </label>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <select id="heard" class="form-control" name="video_durum" required>

            <?php 
            if ($videocek['video_durum']==1) {?>

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
