<?php include 'baglan.php';

ob_start();
session_start();
include 'baglan.php';

if($_SESSION['oturum']!=1){
  header("Location:login.php");
}


$ayarsor=$db->prepare("select * from ayar ");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="tr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>81 İl 81 Hayat Admin</title>


  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php"><b>81 İL 81 HAYAT</b></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">


      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="ayar.php">AYARLAR</a>
          <a class="dropdown-item" href="../index" target="_blank">Siteyi Görüntüle</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Çıkış</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
         <i class="fas fa-home"></i>
         <span>Anasayfa</span>
       </a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="slider.php">
        <i class="fas fa-images"></i>
        <span> Slider</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="hakkimizda.php">
         <i class="fas fa-users"></i>
         <span>Hakkımızda</span>
       </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link" href="dernegimiz.php">
       <i class="fas fa-hotel"></i>
       <span>Derneğimiz</span>
     </a>
   </li>
   <li class="nav-item ">
    <a class="nav-link" href="etkinlikler.php">
     <i class="fas fa-book"></i>
     <span>Etkinlikler</span>
   </a>
 </li>
 <li class="nav-item ">
  <a class="nav-link" href="haberler.php">
   <i class="fas fa-newspaper"></i>
   <span>Haberler</span>
 </a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="galeri.php">
   <i class="fas fa-image"></i>
   <span>Galeri</span>
 </a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="videogaleri.php">
   <i class="fas fa-video"></i>
   <span>Video Galeri</span>
 </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="iletisim.php">
    <i class="fas fa-envelope"></i>
    <span>İletişim</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="kullanicilar.php">
      <i class="fas fa-users"></i>
      <span>Kullanıcılar</span></a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="ayar.php">
       <i class="fas fa-cog"></i>
       <span>Ayarlar</span></a>
     </li>
   </ul>