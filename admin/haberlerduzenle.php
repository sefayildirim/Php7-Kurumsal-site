<?php 
include 'header.php';
include 'baglan.php';

$haberlersor=$db->prepare("SELECT * from haberler where haberler_id=:haberler_id");
$haberlersor->execute(array(
  'haberler_id' => $_GET['haberler_id']
));
$haberlercek=$haberlersor->fetch(PDO::FETCH_ASSOC);

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
        <button  type="submit" name="haberlerduzenle" class="btn btn-primary">
          <i class="fas fa-save"></i>
        </button>
        <a href="haberler.php"><span class="btn btn-secondary">
          <i class="fas fa-undo"></i></span>
        </a>
        <hr>
      </div>
     

        <input type="hidden" name="haberler_id" value="<?php echo $haberlercek['haberler_id']; ?>">

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü resim<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <img width="200" height="100" src="../<?php echo $haberlercek['haberler_yol']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="first-name"  name="haberler_haberleryol"  class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Haberler başlık<span class="required"></span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" required="required" name="haberler_baslik" value="<?php echo $haberlercek['haberler_baslik']; ?>" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
         <div class="form-group">
                    <label for="example-text-input" class="col-form-label">İçerik</label>

                    <textarea  class="ckeditor" id="editor1" name="haberler_detay"><?php echo $haberlercek['haberler_detay']; ?></textarea>
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
