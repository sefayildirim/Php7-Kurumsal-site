<?php include 'header.php';

$iletisimsor=$db->prepare("select * from iletisim order by iletisim_id desc ");
$iletisimsor->execute();
$toplam_icerik=$iletisimsor->rowCount();

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

$sorgu=$db->prepare("select * from iletisim order by iletisim_id desc LIMIT " . $limit . ", " . $sayfada."");
$sorgu->execute();


?>

<head>
	<script language="javascript"> function confirmDel() { var agree=confirm("Bu mesajı silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!"); if (agree) { return true ; } else { return false ;} } 
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
				<br>
				<br>


				<table class="table">
					<thead style="background-color: #03363D; color: white;">
						<tr>
							<th>No</th>
							<th>Adı</th>
							<th>Email</th>
							<th>Mesaj</th>
							<th>Sil</th>
						</tr>
					</thead>
					<tbody>
						<?php while($iletisimcek=$sorgu->fetch(PDO::FETCH_ASSOC)) {  ?>
							<tr>
								<td><?php echo $iletisimcek['iletisim_id']; ?></td>
								<td><?php echo $iletisimcek['kisi_adi']; ?></td>
								<td><?php echo $iletisimcek['kisi_eposta']; ?></td>
								<td><button data-toggle="modal" class="btn btn-primary" data-target="#oku<?php echo $iletisimcek['iletisim_id']; ?>">
								Mesajı Oku</button>


								<!-- modal medium -->
								<div class="modal fade" id="oku<?php echo $iletisimcek['iletisim_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
											<h3 class="modal-title" id="mediumModalLabel"><?php echo $iletisimcek['kisi_adi']; ?> kişisinden gelen mesaj
											</h3>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p>
													<?php echo $iletisimcek['kisi_mesaj']; ?>
												</p>
											</div>
											<div class="modal-footer">


											</div>
										</div>
									</div>
								</div>
								<!-- end modal medium -->
							</td>

							<td>
								<a href="islem.php?iletisimsil=ok&iletisim_id=<?php echo $iletisimcek['iletisim_id']; ?>" onclick="return confirmDel();"><button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button>
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
<script type="text/javascript" src="custom1.js"></script>



<?php include 'footer.php'; ?>

