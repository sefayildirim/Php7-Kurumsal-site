<?php 

include 'header.php';
include 'admin/baglan.php';

if (isset($_POST['adi'], $_POST['eposta'], $_POST['mesaj'],$_POST['tel'])) {

  $adi = trim(filter_input(INPUT_POST, 'adi', FILTER_SANITIZE_STRING));
  $eposta = trim(filter_input(INPUT_POST, 'eposta', FILTER_SANITIZE_EMAIL));
  $mesaj = trim(filter_input(INPUT_POST, 'mesaj', FILTER_SANITIZE_STRING));
  $tel = trim(filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING));

  if (empty($adi) || empty($eposta) || empty($mesaj) || empty($tel) ) {
    die("<p>Lütfen formu eksiksiz doldurun!</p>");
  }

  if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
    die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
  }
}
if (isset($_POST['adi'], $_POST['eposta'], $_POST['mesaj'], $_POST['tel'])) {

  $adi = trim(filter_input(INPUT_POST, 'adi', FILTER_SANITIZE_STRING));
  $eposta = trim(filter_input(INPUT_POST, 'eposta', FILTER_SANITIZE_EMAIL));
  $mesaj = trim(filter_input(INPUT_POST, 'mesaj', FILTER_SANITIZE_STRING));
  $tel = trim(filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING));



  if (empty($adi) || empty($eposta) || empty($mesaj) || empty($tel) )  {
    die("<p>Lütfen formu eksiksiz doldurun!</p>");
  }

  if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
    die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
  }

  try {

    $baglanti = new PDO("mysql:host=localhost;dbname=81il81hayat", "root", "");
    $baglanti->exec("SET NAMES utf8");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sorgu = $baglanti->prepare("INSERT INTO iletisim(kisi_adi, kisi_eposta, kisi_mesaj, kisi_tel) 
      VALUES(?, ?, ?, ?)");
    $sorgu->bindParam(1, $adi, PDO::PARAM_STR);
    $sorgu->bindParam(2, $eposta, PDO::PARAM_STR);
    $sorgu->bindParam(3, $mesaj, PDO::PARAM_STR);
    $sorgu->bindParam(4, $tel, PDO::PARAM_STR);



    $sorgu->execute();

    echo "<p></p>";

  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $baglanti = null;
}
?>



<br>
<section class="page-title small gray-bg">
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
        <h1>İletişim</h1>
      </div>
      
    </div>
  </div> 
</div>
</section>
<!--=================================
 header -->

<!--=================================
 rev-slider -->
 <br>
 <div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <section class="contact white-bg page-section-ptb">
      <div class="container">
       <div class="row justify-content-center">
         <div class="col-lg-8">
          <div class="section-title text-center">
            <h6>BİZİMLE İLETİŞİME GEÇİN</h6>
            <p>BİZİMLE İLETİŞİME GEÇMEK İÇİN AŞAĞIDAKİ FORMU DOLDURUN</p>
          </div>
        </div>
      </div>
      <div class="touch-in white-bg">
       <div class="row">
         <div class="col-lg-4 col-md-4 sm-mb-30">
           <div class="contact-box text-center h-100">
            <i class="ti-map-alt theme-color"></i>
            <h5 class="uppercase mt-20">Adres</h5>
            <p class="mt-20">17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 sm-mb-30">
         <div class="contact-box text-center h-100">
          <i class="ti-mobile theme-color"></i>
          <h5 class="uppercase mt-20">Telefon</h5>
          <p class="mt-20"> +(704) 279-1249</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 sm-mb-30">
       <div class="contact-box text-center h-100">
        <i class="ti-email theme-color"></i>
        <h5 class="uppercase mt-20">Email</h5>
        <p class="mt-20">letstalk@Webtilian.com</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 text-center">
   <p class="mt-50 mb-30"> <span class="tooltip-content-2" data-original-title="Pzt-Cum 10:00 - 19:00 (GMT +1)" data-toggle="tooltip" data-placement="top"></span></p>
 </div>
</div>
<div class="row">
  <div class="col-sm-12">
   <div id="formmessage"> Başarı / Hata Mesajı Burada Gidiyor</div>
   <form  action="" method="post">
    <div class="contact-form clearfix">
     <div class="section-field">
       <input  type="text" placeholder="Adınız soyadınız" required="required" class="form-control"  name="adi">
     </div> 
     <div class="section-field">
       <input type="email" placeholder="Email adresiniz" required="required" class="form-control" name="eposta">
     </div>
     <div class="section-field">
      <input type="text" placeholder="Telefon numaranız" required="required" class="form-control" name="tel">
    </div>

    <div class="section-field textarea">
     <textarea class="form-control input-message" required="required" placeholder="Mesajınız" rows="7" name="mesaj"></textarea>
   </div>
   <input type="submit"  id="custom"  value="Gönder" class="button"></button>
 </div>
</div>
</form>




<div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div> 
</div>
</div>
</div>
</section>
</div>

</div>
<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>