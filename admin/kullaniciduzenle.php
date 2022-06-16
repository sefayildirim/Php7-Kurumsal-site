<?php 
include 'header.php';
include 'baglan.php';
$kullanicisor=$db->prepare("select * from kullanicilar where id=".$_GET['id']);
$kullanicisor->execute(array());
$kullanicicek=$kullanicisor->fetch();

?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>
<head>
  <script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<div class="container">
  <br>
  <br>
  <br>
  
  <div class="row">
    <div class="col-md-12">
      <form action="islem.php" method="POST" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

        <input type="hidden" name="id" value="<?php echo $kullanicicek['id']; ?>">

        <div class="form-group">
          <label for="example-text-input" class="col-form-label">Ad</label>

          <input class="form-control" type="text" required="required" name="kadi" value="<?php echo $kullanicicek['kadi']; ?>" id="example-text-input">
        </div>

        <div class="form-group">
          <label for="example-text-input" class="col-form-label">Parola</label>
          <input class="form-control" type="password" required="required" name="parola" value="" id="example-text-input">
        </div>
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
          <input type="submit" name="kullaniciguncelle" value="Güncelle" class="btn btn-primary">
        </div>

      </form>

    </div>
  </div>
</div>


<?php include 'footer.php'; ?>
