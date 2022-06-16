<?php include 'header.php';

$videosor=$db->prepare("select * from video where video_durum=1 order by video_sira desc ");
$videosor->execute();


?>
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
        <h1>Video Galeri</h1>
      </div>
    </div>
  </div> 
</div>
</section>
<div class=" gallery-container">
  <div class="tz-gallery">
    <div class="row">
     <?php foreach ($videosor as $key => $value) {
        //print_r($value);
       $parca = explode("=", $value['video_url']); 
       //print_r($parca);
      ?>
        <div class="col-md-4">
          <br>
          <br>
         <div class="embed-responsive embed-responsive-16by9">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $parca[1]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    <?php } ?>

  </div>
</div>
</div>


<?php include 'footer.php'; ?>