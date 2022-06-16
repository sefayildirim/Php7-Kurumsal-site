<?php
include 'header.php';
include 'baglan.php';
$ayarsor=$db->prepare("SELECT * from ayar WHERE ayar_id=1");
$ayarsor->execute(array(

));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE); ?>
<head>
	<script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<div class="table-responsive">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<br>

				<form action="islem.php" method="POST" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					<div align="right" class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
						<button  type="submit" name="ayarkaydet" class="btn btn-primary">
							<i class="fas fa-save"></i>
						</button>
						<a href="index.php"><span class="btn btn-secondary">
							<i class="fas fa-undo"></i></span>
						</a>
						<hr>
					</div>


					<div class="form-group">
						<label>Yüklü logo<span class="required"></span>
						</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<img width="330" height="120" src="../<?php echo $ayarcek['ayar_yol']; ?>">
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">logo seç<span class="required"></span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="file" id="first-name"  name="ayar_ayaryol"  class="form-control col-md-7 col-xs-12">
						</div>
					</div>

					<div class="form-group">
						<label for="example-text-input" class="col-form-label">Adres</label>

						<input class="form-control" type="text" required="required" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres']; ?>" id="example-text-input">
					</div>
					<div class="form-group">
						<label for="example-text-input" class="col-form-label">Telefon</label>

						<input class="form-control" type="text" required="required" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon']; ?>" id="example-text-input">
					</div>

					<div class="form-group">
						<label for="example-text-input" class="col-form-label">Mail</label>

						<input class="form-control" type="text" required="required" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>" id="example-text-input">
					</div>

					<div class="form-group">
						<label for="example-text-input" class="col-form-label">Facebook</label>

						<input class="form-control" type="text" required="required" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>" id="example-text-input">
					</div>

					<div class="form-group">
						<label for="example-text-input" class="col-form-label">Twitter</label>

						<input class="form-control" type="text" required="required" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']; ?>" id="example-text-input">
					</div>

					<div class="form-group">
						<label for="example-text-input" class="col-form-label">İnstagram</label>

						<input class="form-control" type="text" required="required" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram']; ?>" id="example-text-input">
					</div>



					<div class="form-group">
						<label for="example-text-input" class="col-form-label">Açıklama</label>

						<textarea  class="ckeditor" id="editor1" name="ayar_aciklama"><?php echo $ayarcek['ayar_aciklama']; ?></textarea>
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




					<br>

				</form>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
		</div>
	</div> 
</div>

<?php include 'footer.php'; ?>

