<?php include 'header.php';


$videosor=$db->prepare("select * from video order by video_id ASC ");
$videosor->execute();
$toplam_icerik=$videosor->rowCount();
$say=0;

$sayfada = 15;
$toplam_sayfa = ceil($toplam_icerik / $sayfada);

// eğer sayfa girilmemişse 1 varsayalım.
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

// eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
if($sayfa < 1) $sayfa = 1; 

// toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

// kaçıncı içerikten başlanacağını ifade edecek limit değeri.
$limit = ($sayfa - 1) * $sayfada;

$sorgu=$db->prepare("select * from video order by video_id desc LIMIT " . $limit . ", " . $sayfada."");
$sorgu->execute();

?>

<head>
	<script language="javascript"> function confirmDel() { var agree=confirm("Bu videoyu silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!"); if (agree) { return true ; } else { return false ;} } 
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="switch.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.10/dist/sweetalert2.all.min.js"></script>
</head>

<div class="table-responsive">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<br>
				<a href="videoekle.php">
					<button class="btn btn-primary"><i class="fas fa-plus"></i> Yeni Ekle</button>
				</a>
				<br>
				<br>


				<table class="table">
					<thead style="background-color: #03363D; color: white;">
						<tr>
							<th>No</th>
							<th>video</th>
							<th>Sıra</th>
							<th>Durum</th>
							<th>Düzenle</th>
							<th>Sil</th>
						</tr>
					</thead>
					<tbody>
						<?php while($videocek=$sorgu->fetch(PDO::FETCH_ASSOC)) { $say++;

							$parca = explode("=", $videocek['video_url']); ?>
							<tr>
								<td><?php echo $videocek['video_id']; ?></td>
								<td>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $parca[1]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
										</iframe>
									</div>
								</td>
								<td><?php echo $videocek['video_sira']; ?></td>
								<td>

									<div class="switch">
										<label class="switch">
											<input type="checkbox" id="<?php echo $videocek["video_id"];?>" class="aktifpasif" <?php echo $videocek["video_durum"] == 1 ? 'checked' : null;?>/><span class="slider round"></span>
										</label>
									</div>
								</td>

								<td><a href="videoduzenle.php?video_id=<?php echo $videocek['video_id']; ?>"><button  class="btn btn-primary btn-xs"><i class="fas fa-pencil-alt"></i> Düzenle</button></a></td>

								<td>
									<a href="islem.php?videosil=ok&video_id=<?php echo $videocek['video_id']; ?>" onclick="return confirmDel();"><button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button>
									</a>
								</td>
							</tr>
						<?php } ?>    
					</tbody>
				</table>

			</div>
			<br>
			<br>
			<br>
			<nav aria-label="Page navigation example">
				<ul class="pagination">

					<?php 
					for($s = 1; $s <= $toplam_sayfa; $s++)
					{
           if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
                 //echo $s . ' '; 
           	echo '<li class="page-item active"><a class="page-link" href="javascript:;">' . $s . '</a></li> ';
           } else {
           	echo '<li class="page-item"><a class="page-link" href="?sayfa=' . $s . '">' . $s . '   </a></li> ';
           }
       }  
       ?> 

   </ul>

</nav>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
</div>
<script type="text/javascript" src="custom2.js"></script>



<?php include 'footer.php'; ?>

