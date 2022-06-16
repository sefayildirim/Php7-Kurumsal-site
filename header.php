<?php include 'admin/baglan.php';
$url = 'http://localhost/sefa/81il-81hayat/';

$ayarsor=$db->prepare("select * from ayar ");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="81 İl - 81 Hayat" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>81 İl - 81 Hayat</title>

  <!-- Favicon -->
   <link rel="icon" href="images/favicon.ico">

  <!-- font -->
  <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Plugins -->
  <link rel="stylesheet" type="text/css" href="css/plugins-css.css" />
  <link rel="stylesheet" href="gallery-grid.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

  <!-- revoluation -->
  <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />

  <!-- Typography -->
  <link rel="stylesheet" type="text/css" href="css/typography.css" />

  <!-- Shortcodes -->
  <link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <!-- consulting -->
  <link rel="stylesheet" type="text/css" href="css/consulting.css" /> 

  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" /> 

  <!-- Style customizer -->
  <link rel="stylesheet" type="text/css" href="css/skins/skin-steelblue.css" data-style="styles"/>

</head>

<body>

  <div class="wrapper">

<!--=================================
 preloader -->
 
 <div id="pre-loader">
  <img src="images/pre-loader/loader-05.svg" alt="">
</div>

<!--=================================
 preloader -->

<!--=================================
 header -->

 <header id="header" class="header light">
   <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 xs-mb-10">
          <div class="topbar-call text-center text-md-left">
            <ul>
              <li><i class="fa fa-envelope-o theme-color"></i> <?php echo $ayarcek['ayar_mail']; ?></li>
              <li><i class="fa fa-phone"></i> <a href="tel:+7042791249"> <span><?php echo $ayarcek['ayar_telefon']; ?> </span> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="topbar-social text-center text-md-right">
            <ul>
              <li><a href="<?php echo $ayarcek['ayar_facebook']; ?>" target="_blank"><span class="ti-facebook"></span></a></li>
              <li><a href="<?php echo $ayarcek['ayar_instagram']; ?>" target="_blank"><span class="ti-instagram"></span></a></li>
              <li><a href="<?php echo $ayarcek['ayar_twitter']; ?>" target="_blank"><span class="ti-twitter"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

 <div id="danismanlik-anasayfa" class="menu">  
  <!-- menu start -->
  <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
          <li>
            <a href="index.php"><img src="<?php echo $ayarcek['ayar_yol']; ?>" > </a>
          </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">

           <li><a href="index">Anasayfa  </a> </li>
           <li><a href="hakkimizda">Hakkımızda  </a> </li>     
           <li><a href="dernegimiz">Derneğimiz </a> </li>
           <li><a href="etkinlikler.php">Etkinlikler </a> </li>
           <li><a href="haberler.php">Haberler </a> </li>
           <li><a href="javascript:void(0)">Galeri <i class="fa fa-angle-down fa-indicator"></i></a>
            <!-- drop down multilevel  -->
            <div class="drop-down">
              <!--grid row-->
              <div class="grid-row">
               <!--grid column 3-->
               <div class="grid-col-6">
                 <ul>
                   <li><a href="galeri">Foto Galeri </a></li>
                   <li><a href="video">Video Galeri</a></li>
                 </ul>
               </div>
             </div>
           </div>
         </li>
         <li><a href="iletisim">İletişim </a> </li>
       </ul>

     </div>
   </div>
 </div>
</div>
</section>
</nav>
<!-- menu end -->
</div>
</header>