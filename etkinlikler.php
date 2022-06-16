<?php 

include 'header.php';

$etkinliklersor=$db->prepare("select * from etkinlikler");
$etkinliklersor->execute();
$toplam_icerik=$etkinliklersor->rowCount();

$sayfada = 20;
$toplam_sayfa = ceil($toplam_icerik / $sayfada);

$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

if($sayfa < 1) $sayfa = 1; 

if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

$limit = ($sayfa - 1) * $sayfada;

$sorgu=$db->prepare("select * from etkinlikler order by etkinlikler_id desc LIMIT " . $limit . ", " . $sayfada."");
$sorgu->execute();

?>
<br>
<section class="page-title small gray-bg">
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
        <h1>Etkinlikler</h1>
      </div>
      
    </div>
  </div> 
</div>
</section>
<br>
<div class="container">
  <div class="row">
    <section class="our-history white-bg page-section-ptb">
      <div class="container">
        <div class="row justify-content-center">
         <div class="col-lg-10">
          <div class="section-title text-center">

            <h2 class="title-effect">Etkinliklerimiz</h2>
          </div>      
        </div>
      </div>
      <div class="row justify-content-center">
       <div class="col-lg-10">
        <div class="timeline-dots"></div>
        <ul class="timeline">
          <?php 

          foreach ($sorgu  as $key => $value) { 
            
            if ($key%2==0) { 

              ?>
              
              <li>

                <div class="timeline-badge"><p class="theme-color"><?php echo $value['etkinlikler_tarih']; ?></p></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h5 class="timeline-title text-muted"> <a href="etkinliklerdetay.php?etkinlikler_id=<?php echo $value['etkinlikler_id'];  ?>"><?php echo $value['etkinlikler_baslik']; ?></a></h5>
                    
                  </div>
                  <div class="timeline-body">
                    <a href="etkinliklerdetay.php?etkinlikler_id=<?php echo $value['etkinlikler_id'];  ?>"><p><?php echo substr($value['etkinlikler_icerik'],0,250); ?>..</p></a>
                  </div>
                </div>
              </li>
              <?php 
            } else{ 

             ?>
             <li class="timeline-inverted">
              <div class="timeline-badge"><p class="theme-color"><?php echo $value['etkinlikler_tarih']; ?></p></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                 <h5 class="timeline-title text-muted"> <a href="etkinliklerdetay.php?etkinlikler_id=<?php echo $value['etkinlikler_id'];  ?>"><?php echo $value['etkinlikler_baslik']; ?></a></h5>
               </div>
               <div class="timeline-body">
                <a href="etkinliklerdetay.php?etkinlikler_id=<?php echo $value['etkinlikler_id'];  ?>"><p><?php echo substr($value['etkinlikler_icerik'],0,250); ?>..</p></a>
              </div>
            </div>
          </li>
          <?php 
        }
      } 
      ?>

      <li class="timeline-arrow"><i class="fa fa-chevron-down"></i></li>
    </ul>
  </div>
</div>
</div>
</section>
</div>

</div>
<div class="container">
 <nav aria-label="Page navigation example">
  <ul class="pagination">

    <?php 
    for($s = 1; $s <= $toplam_sayfa; $s++)
    {
     if($sayfa == $s) { 
       
      echo '<li class="page-item active"><a class="page-link" href="javascript:;">' . $s . '</a></li> ';
    } else {
      echo '<li class="page-item"><a class="page-link" href="?sayfa=' . $s . '">' . $s . '</a></li> ';
    }
  }  
  ?> 

</ul>

</div>


<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>