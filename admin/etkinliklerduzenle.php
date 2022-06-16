<?php 
include 'header.php';
include 'baglan.php';

$etkinliklersor=$db->prepare("SELECT * from etkinlikler where etkinlikler_id=:etkinlikler_id");
$etkinliklersor->execute(array(
  'etkinlikler_id' => $_GET['etkinlikler_id']
));
$etkinliklercek=$etkinliklersor->fetch(PDO::FETCH_ASSOC);

?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>
<head>
  <script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      <form action="islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div align="right" class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
          <button  type="submit" name="etkinliklerduzenle" class="btn btn-primary">
            <i class="fas fa-save"></i>
          </button>
          <a href="etkinlikler.php"><span class="btn btn-secondary">
            <i class="fas fa-undo"></i></span>
          </a>
          <hr>
        </div>


        <input type="hidden" name="etkinlikler_id" value="<?php echo $etkinliklercek['etkinlikler_id']; ?>">

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü resim<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <img width="200" height="100" src="../<?php echo $etkinliklercek['etkinlikler_yol']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="first-name"  name="etkinlikler_etkinlikleryol"  class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Etkinlik Tarihi<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" required="required" name="etkinlikler_tarih" value="<?php echo $etkinliklercek['etkinlikler_tarih']; ?>" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" required="required" name="etkinlikler_baslik" value="<?php echo $etkinliklercek['etkinlikler_baslik']; ?>" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="form-group">
          <label for="example-text-input" class="col-form-label">İçerik</label>

          <textarea  class="ckeditor" id="editor1" name="etkinlikler_icerik"><?php echo $etkinliklercek['etkinlikler_icerik']; ?></textarea>
        </div>
        <script type="text/javascript">


         CKEDITOR.replace( 'editor1',
         {
          filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
          filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
          filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
          filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
          filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
          filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
          forcePasteAsPlainText: true
        } 
        );
      </script>
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
