<?php  include 'header.php'; ?>
<?php  include 'baglan.php';

$kullanicisor=$db->prepare("select * from kullanicilar");
$kullanicisor->execute();
$say=$kullanicisor->rowCount();


?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>
<head>
 <script language="javascript"> function confirmDel() { var agree=confirm("Bu kişiyi silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!"); if (agree) { return true ; } else { return false ;} } </script>
</head>
<div class="container">
    <br>
    <br>
    <br>
    <div class="row">
        <br>
            <a href="kullaniciekle.php">
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Yeni Ekle</button>
                </a>
                <br>
                <br>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="color: blue;">Kullanıcı no</th>
                        <th style="color: blue;">Kullanıcı adı</th>
                        <th style="color: blue;">Düzenle</th>
                        <th style="color: red;">Sil</th>
                    </tr>
                </thead>
                <tbody>



                  <?php 
                  while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {
                      ?>
                      <tr>
                        <td><?php echo $kullanicicek['id']; ?></td>

                        <td><?php echo $kullanicicek['kadi']; ?></td>
                        <td><a href="kullaniciduzenle.php?id=<?php echo $kullanicicek['id']; ?>"><button  class="btn btn-primary btn-xs"><i class="fas fa-pencil-alt"></i>  Düzenle</button></a></td>
                        <td><a href="islem.php?kullanicisil=ok&id=<?php echo $kullanicicek['id']; ?>" onclick="return confirmDel();"><button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i>  Sil</button></a></td>
                    </tr>
                <?php } ?>   
            </tbody>
        </table>
    </div>

</div>
</div>
</div>

<?php include 'footer.php'; ?>