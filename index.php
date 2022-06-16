<?php 

include 'header.php';
include 'admin/baglan.php';

$slidersor=$db->prepare("select * from slider where slider_durum=1 order by slider_sira asc");
$slidersor->execute();


$haberlersor=$db->prepare("select * from haberler order by haberler_id desc LIMIT 0,2");
$haberlersor->execute();

$hakkimizdasor=$db->prepare("select * from hakkimizda");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<!--=================================
 header -->

<!--=================================
 rev-slider -->

 <section class="rev-slider">
  <div id="rev_slider_264_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="Webtilian-consulting" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
    <div id="rev_slider_264_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
      <ul>  <!-- SLIDE  -->

       <?php 

       while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { 
        ?>

        <li data-index="rs-749" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="<?php echo $slidercek['slider_yol']; ?>"  data-delay="7000"  data-rotate="0"  data-saveperformance="off"  data-title="Sıradaki" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="<?php echo $slidercek['slider_yol']; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
        </li>
      <?php } ?>
    </ul>
    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
  </div>
</section>

<!--=================================
 rev-slider -->
 
<!--=================================
  See our awesome -->


 <!--=================================
  See our awesome -->

 <!--=================================
  counter-->

  
 <!--=================================
  counter-->

<!--=================================
  agency-->
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row">
     <div class="col-md-6">
      <br>
      <br>
      <br>
      <h3 style="text-align: left;"><?php echo $hakkimizdacek['hakkimizda_baslik2']; ?></h3>

      <p>
        <?php echo substr($hakkimizdacek['hakkimizda_icerik'],0,600); ?>...
        <br>
        <br>
        <a href="hakkimizda.php"><button class="btn btn-danger">
          Devamını oku
        </button></a>

      </p>
    </div>
    <div class="col-md-6">

      <br>
      <br>
      <div class="card mb-6">
        <img class="card-img-top" src="<?php echo $hakkimizdacek['hakkimizda_yol']; ?>" alt="Card image cap">

      </div>  
    </div>


  </div>

</div>

<br>
<br>
<br>

<section id="danismanlik-haber" class="agency-form page-section-ptb gray-bg">
  <div class="container">
   <div class="row">

     <div class="col-lg-12 xs-mt-20">
      <div class="section-title text-center">
        <h6 class="subtitle"><span class="theme-color"></span> </h6>
        <h2 class="title">Son Haberler </h2>
      </div>
      <div class="row">
        <?php while ($haberlercek=$haberlersor->fetch(PDO::FETCH_ASSOC)) {

         ?>
         <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="blog-box blog-2 active">

            <img class="img-fluid" src="<?php echo $haberlercek['haberler_yol']; ?>" alt="">
            <div class="blog-info">

              <h4> <a href="haberlerdetay.php?haberler_id=<?php echo $haberlercek['haberler_id'];  ?>"> <?php echo $haberlercek['haberler_baslik']; ?></a></h4>          
              <p><?php echo substr($haberlercek['haberler_detay'],0,200); ?>...</p>

              <a class="button icon-color" href="haberlerdetay.php?haberler_id=<?php echo $haberlercek['haberler_id'];  ?>">Devamını Oku<i class="fa fa-angle-right"></i></a>
            </div>  
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
</div>
</section>



<?php include 'footer.php'; ?>