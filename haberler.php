<?php 

include 'header.php';


$haberlersor=$db->prepare("select * from haberler   order  by haberler_id desc ");
$haberlersor->execute();
$toplam_icerik=$haberlersor->rowCount();

$sayfada = 10;
$toplam_sayfa = ceil($toplam_icerik / $sayfada);

// eğer sayfa girilmemişse 1 varsayalım.
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

// eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
if($sayfa < 1) $sayfa = 1; 

// toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

// kaçıncı içerikten başlanacağını ifade edecek limit değeri.
$limit = ($sayfa - 1) * $sayfada;

$sorgu=$db->prepare("select * from haberler  order by haberler_id desc LIMIT " . $limit . ", " . $sayfada."");
$sorgu->execute();

?>
<br>
<section class="page-title small gray-bg">
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
        <h1>Haberler</h1>
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

   <?php 

   while($haberlercek=$sorgu->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <a href="haberlerdetay.php?haberler_id=<?php echo $haberlercek['haberler_id'];  ?>"><div class="col-lg-6 col-md-6 col-sm-6">
      <div class="blog-entry mb-50">
        <div class="entry-image clearfix">
          <img class="img-fluid" src="<?php echo $haberlercek['haberler_yol']; ?>" alt="">
        </div>
        <div class="blog-detail">
          <div class="entry-title mb-10">
            <a href="haberlerdetay.php?haberler_id=<?php echo $haberlercek['haberler_id'];  ?>"><?php echo $haberlercek['haberler_baslik']; ?></a>
          </div>
          <div class="entry-meta mb-10">

          </div>
          <div class="entry-content">
            <p><?php echo substr($haberlercek['haberler_detay'],0,250); ?>... </p>
          </div>
          <div class="entry-share clearfix">
            <div class="entry-button">
              <a class="button arrow" href="haberlerdetay.php?haberler_id=<?php echo $haberlercek['haberler_id'];  ?> ">Devamını oku<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <div class="social list-style-none float-right">

            </div>
          </div>
        </div>
      </div>
    </div> </a>
    <?php }  ?>

</div>
<div class="container">
 <nav aria-label="Page navigation example">
  <ul class="pagination">

    <?php 
    for($s = 1; $s <= $toplam_sayfa; $s++)
    {
           if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
              //echo $s . ' '; 
            echo '<li class="page-item active"><a class="page-link" href="javascript:;">' . $s . '</a></li> ';
          } else {
            echo '<li class="page-item"><a class="page-link" href="?sayfa=' . $s . '">' . $s . '</a></li> ';
          }
        }  
        ?> 

      </ul>

    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>

  <?php include 'footer.php'; ?>