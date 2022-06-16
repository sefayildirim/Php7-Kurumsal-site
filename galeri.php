<?php include 'header.php'; ?>
<head>
	<script>
    baguetteBox.run('.tz-gallery');
  </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
</head>
<section class="page-title small gray-bg">
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
        <h1>Galeri</h1>
      </div>
      
    </div>
  </div> 
</div>
</section>
  <div class=" gallery-container">
    <div class="tz-gallery">
      <div class="row">
        <?php 

        $resimsor=$db->prepare("select * from resim where resim_durum=1 order by resim_sira desc ");
        $resimsor->execute();

        while($resimcek=$resimsor->fetch(PDO::FETCH_ASSOC)) {
          ?>
        <div class="col-sm-2 col-md-4">
          <a class="lightbox" href="<?php echo $resimcek['resim_yol']; ?>">
            <img src="thumb.php?src=<?php echo $url;?><?php echo $resimcek['resim_yol']; ?>&w=830&h=595&zc=2" alt="Park">
          </a>
        </div>
      <?php } ?>

      </div>
    </div>
  </div>


  <?php include 'footer.php'; ?>