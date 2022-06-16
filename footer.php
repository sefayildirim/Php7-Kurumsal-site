<?php 
$ayarsor=$db->prepare("select * from ayar ");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


 ?>


<footer class="footer page-section-pt black-bg">
 <div class="container">
  <div class="row">
    <div class="col-lg-4 col-sm-6 sm-mb-30">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Menü</h6>
        <ul>
          <li><a href="index">Anasayfa</a></li>
          <li><a href="hakkimizda">Hakkımızda</a></li>
          <li><a href="dernegimiz">Derneğimiz</a></li>
          <li><a href="etkinlikler.php">Etkinlikler</a></li>
          <li><a href="haberler.php">Haberler</a></li>
          <li><a href="galeri">Galeri</a></li>
          <li><a href="iletisim">İletişim</a></li>
        </ul>
      </div>
    </div>
    
    <div class="col-lg-4 col-sm-6 xs-mb-30">
      <h6 class="text-white mb-30 mt-10 text-uppercase">İletişim </h6>
      <ul class="addresss-info"> 
        <li><i class="fa fa-map-marker"></i> <p>Adres: <?php echo $ayarcek['ayar_adres']; ?></p> </li>
        <li><i class="fa fa-phone"></i>Telefon: <a href="tel:<?php echo $ayarcek['ayar_telefon']; ?>"> <span><?php echo $ayarcek['ayar_telefon']; ?> </span> </a> </li>
        <li><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>">Email: <?php echo $ayarcek['ayar_mail']; ?></li></a>
      </ul>
    </div>
    <div class="col-lg-4 col-sm-6">
      <h6 class="text-white mb-30 mt-10 text-uppercase"></h6>
      <p><?php print_r ($ayarcek['ayar_aciklama']); ?></p>
      <div class="footer-Newsletter">
        <div id="mc_embed_signup_scroll">

        </div>
      </div>
    </div>
  </div>
  <div class="footer-widget mt-20">
    <div class="row">
      <div class="col-lg-6 col-md-6">
       <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span><font style="color: white;"> 81 İl 81 Hayal</font>  Tüm hakları saklıdır. </p>
     </div>
     <div class="col-lg-6 col-md-6 text-left text-md-right">
      <div class="footer-widget-social">
       <ul> 
        <li><a href="<?php echo $ayarcek['ayar_facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="<?php echo $ayarcek['ayar_twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="<?php echo $ayarcek['ayar_twitter']; ?>" target="_blank"><i class="fa fa-instagram"></i> </a></li>
      </ul>
    </div>
  </div>
</div>    
</div>
</div>
</footer>

<!--=================================
 footer -->
 
</div>



<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>Yukarı</span></a></div>

<!--=================================
 jquery -->

 <!-- jquery -->
 <script src="js/jquery-3.3.1.min.js"></script>

 <!-- plugins-jquery -->
 <script src="js/plugins-jquery.js"></script>
 <script>
  baguetteBox.run('.tz-gallery');
</script> 



<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- REVOLUTION JS FILES -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- revolution custom --> 
<script src="revolution/js/revolution-custom.js"></script> 

<!-- custom -->
<script src="js/custom.js"></script>



</body>
</html>