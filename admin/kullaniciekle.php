<?php 
include 'header.php';
include 'baglan.php';


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
 <form action="islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
  <div align="right" class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
    <button type="submit" name="kullaniciekle" class="btn btn-primary">
      <i class="fas fa-save"></i>
    </button>
    <a href="haberler.php"><span class="btn btn-secondary">
      <i class="fas fa-undo"></i></span>
    </a>
    <hr>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="form-group">
        <label for="example-text-input" class="col-form-label">Ad:</label>

        <input class="form-control" type="text" required="required" name="kadi"placeholder="Kullanıcı adını giriniz..." id="example-text-input">
      </div>
      <div class="form-group">
        <label for="example-text-input" class="col-form-label">Şifre:</label>

        <input class="form-control" type="password" required="required" name="parola"placeholder="Parolayı giriniz..."  id="example-text-input">
      </div>




      <br>

    </form>
    
  </div>
</div></div>


<?php include 'footer.php'; ?>
