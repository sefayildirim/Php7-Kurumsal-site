<?php  
ob_start();
session_start();
include 'baglan.php';



if (isset($_POST['videokaydet'])) {

	$kaydet=$db->prepare("INSERT INTO video SET
		video_url=:url,
		video_sira=:sira,
		video_durum=:durum");
	$insert=$kaydet->execute(array(
		'url' => $_POST['video_url'],
		'sira' => $_POST['video_sira'],
		'durum' => $_POST['video_durum'],
		
	));

	if ($insert) {

		Header("Location:videogaleri.php?durum=ok");

	} else {

		Header("Location:videogaleri.php?durum=no");
	}

}


if (isset($_POST['videoduzenle'])) {


	$duzenle=$db->prepare("UPDATE video SET
		video_url=:url,
		video_sira=:sira,
		video_durum=:durum	
		WHERE video_id={$_POST['video_id']}");
	$update=$duzenle->execute(array(
		'url' => $_POST['video_url'],
		'sira' => $_POST['video_sira'],
		'durum' => $_POST['video_durum']
	));


	if ($update) {

		Header("Location:videogaleri.php?video_id=$video_id&durum=ok");

	} else {

		Header("Location:videogaleri.php?durum=no");
	}



}


if(isset($_GET['videosil'])){
	if ($_GET['videosil']=="ok") {
	//echo "string"; exit();
		$sil=$db->prepare("DELETE from video where video_id=:video_id");
		$kontrol=$sil->execute(array(
			'video_id' => $_GET['video_id']
		));

		if ($kontrol) {

			Header("Location:videogaleri.php");

		} else {

			Header("Location:hata.php");
		}

	}
}

if(isset($_GET['kullanicisil'])){
	if ($_GET['kullanicisil']=="ok") {

		$sil=$db->prepare("DELETE from kullanicilar where id=:id");
		$kontrol=$sil->execute(array(
			'id' => $_GET['id']
		));

		if ($kontrol) {

			Header("Location:kullanicilar.php?durum=ok");

		} else {

			Header("Location:kullanicilar.php?durum=no");
		}

	}
}

if (isset($_POST['kullaniciekle'])) {

	$parola=md5($_POST['parola']);

	
	$kaydet=$db->prepare("INSERT INTO kullanicilar SET
		kadi=:adsoyad,
		parola=:password");
	$insert=$kaydet->execute(array(
		'adsoyad' => $_POST['kadi'],
		'password' =>  $parola
	));

	if ($insert) {

		Header("Location:kullanicilar.php?durum=ok");

	} else {

		Header("Location:kullanicilar.php?durum=no");
	}

}

if (isset($_POST['kullaniciguncelle'])) {
//echo "a";exit;

	$parola=md5($_POST['parola']);
	
	$ayarkaydet=$db->prepare("UPDATE kullanicilar SET

		kadi=:adsoyad,
		parola=:password
		WHERE id={$_POST['id']}");
	$update=$ayarkaydet->execute(array(
		
		'adsoyad' => $_POST['kadi'],
		'password' => $parola
	));

	if ($update) {

		Header("Location:kullanicilar.php?durum=ok");

	} else {

		Header("Location:kullanicilar.php?durum=no");
	}

}



if (isset($_POST['sliderkaydet'])) {

	$klasor="../images";
	$dosya_sayi=count($_FILES['slider_slideryol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['slider_slideryol']['name'])){ 
			move_uploaded_file($_FILES['slider_slideryol']['tmp_name'],$klasor."/".time().$_FILES['slider_slideryol']['name']); 
		} 
	}
	
	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_sira=:sira,
		slider_durum=:durum,
		slider_yol=:slideryol");
	$insert=$kaydet->execute(array(
		'sira' => $_POST['slider_sira'],
		'durum' => $_POST['slider_durum'],
		'slideryol' => "images/".time().$_FILES['slider_slideryol']['name'].""
	));

	if ($insert) {

		Header("Location:slider.php?durum=ok");

	} else {

		Header("Location:slider.php?durum=no");
	}

}

if(isset($_GET['slidersil'])){
	if ($_GET['slidersil']=="ok") {
	//echo "string"; exit();
		$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
		$kontrol=$sil->execute(array(
			'slider_id' => $_GET['slider_id']
		));

		if ($kontrol) {

			Header("Location:slider.php");

		} else {

			Header("Location:hata.php");
		}

	}
}

if(isset($_GET['iletisimsil'])){
	if ($_GET['iletisimsil']=="ok") {
	//echo "string"; exit();
		$sil=$db->prepare("DELETE from iletisim where iletisim_id=:iletisim_id");
		$kontrol=$sil->execute(array(
			'iletisim_id' => $_GET['iletisim_id']
		));

		if ($kontrol) {

			Header("Location:iletisim.php");

		} else {

			Header("Location:hata.php");
		}

	}
}

if(isset($_GET['resimsil'])){
	if ($_GET['resimsil']=="ok") {
	//echo "string"; exit();
		$sil=$db->prepare("DELETE from resim where resim_id=:resim_id");
		$kontrol=$sil->execute(array(
			'resim_id' => $_GET['resim_id']
		));

		if ($kontrol) {

			Header("Location:galeri.php");

		} else {

			Header("Location:hata.php");
		}

	}
}

if (isset($_POST['sliderduzenle'])) {
	$klasor="../images";
	$dosya_sayi=count($_FILES['slider_slideryol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['slider_slideryol']['name'])){ 
			move_uploaded_file($_FILES['slider_slideryol']['tmp_name'],$klasor."/".time().$_FILES['slider_slideryol']['name']); 

			$duzenle=$db->prepare("UPDATE slider SET
				slider_sira=:sira,
				slider_durum=:durum,
				slider_yol=:slideryol	
				WHERE slider_id={$_POST['slider_id']}");
			$update=$duzenle->execute(array(
				'sira' => $_POST['slider_sira'],
				'durum' => $_POST['slider_durum'],
				'slideryol' => "images/".time().$_FILES['slider_slideryol']['name'].""
			));
		}else{

			$duzenle=$db->prepare("UPDATE slider SET
				slider_sira=:sira,
				slider_durum=:durum
				WHERE slider_id={$_POST['slider_id']}");
			$update=$duzenle->execute(array(
				'sira' => $_POST['slider_sira'],
				'durum' => $_POST['slider_durum']
			));
		} 
	}


	if ($update) {

		Header("Location:slider.php?slider_id=$slider_id&durum=ok");

	} else {

		Header("Location:slider.php?durum=no");
	}

}


if (isset($_POST['resimduzenle'])) {
	$klasor="../images";
	$dosya_sayi=count($_FILES['resim_resimyol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['resim_resimyol']['name'])){ 
			move_uploaded_file($_FILES['resim_resimyol']['tmp_name'],$klasor."/".time().$_FILES['resim_resimyol']['name']); 

			$duzenle=$db->prepare("UPDATE resim SET
				resim_sira=:sira,
				resim_durum=:durum,
				resim_yol=:resimyol	
				WHERE resim_id={$_POST['resim_id']}");
			$update=$duzenle->execute(array(
				'sira' => $_POST['resim_sira'],
				'durum' => $_POST['resim_durum'],
				'resimyol' => "images/".time().$_FILES['resim_resimyol']['name'].""
			));
		}else{

			$duzenle=$db->prepare("UPDATE resim SET
				resim_sira=:sira,
				resim_durum=:durum
				WHERE resim_id={$_POST['resim_id']}");
			$update=$duzenle->execute(array(
				'sira' => $_POST['resim_sira'],
				'durum' => $_POST['resim_durum']
			));
		} 
	}


	if ($update) {

		Header("Location:galeri.php?resim_id=$resim_id&durum=ok");

	} else {

		Header("Location:galeri.php?durum=no");
	}

}


if (isset($_POST['dernegimizduzenle'])) {
	$klasor="../images";
	$dosya_sayi=count($_FILES['dernegimiz_dernegimizyol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['dernegimiz_dernegimizyol']['name'])){ 
			move_uploaded_file($_FILES['dernegimiz_dernegimizyol']['tmp_name'],$klasor."/".time().$_FILES['dernegimiz_dernegimizyol']['name']); 

			$duzenle=$db->prepare("UPDATE dernegimiz SET
				dernegimiz_icerik=:icerik,
				dernegimiz_baslik=:baslik,
				dernegimiz_yol=:dernegimizyol	
				WHERE dernegimiz_id=1");
			$update=$duzenle->execute(array(
				'icerik' => $_POST['dernegimiz_icerik'],
				'baslik' => $_POST['dernegimiz_baslik'],
				'dernegimizyol' => "images/".time().$_FILES['dernegimiz_dernegimizyol']['name'].""
			));
		}else{

			$duzenle=$db->prepare("UPDATE dernegimiz SET
				dernegimiz_icerik=:icerik,
				dernegimiz_baslik=:baslik
				WHERE dernegimiz_id=1");
			$update=$duzenle->execute(array(
				'icerik' => $_POST['dernegimiz_icerik'],
				'baslik' => $_POST['dernegimiz_baslik']
			));
		} 
	}


	if ($update) {

		Header("Location:dernegimiz.php?dernegimiz_id=$dernegimiz_id&durum=ok");

	} else {

		Header("Location:dernegimiz.php?durum=no");
	}

}



if (isset($_POST['hakkimizdaduzenle'])) {
	$klasor="../images";
	$dosya_sayi=count($_FILES['hakkimizda_hakkimizdayol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['hakkimizda_hakkimizdayol']['name'])){ 
			move_uploaded_file($_FILES['hakkimizda_hakkimizdayol']['tmp_name'],$klasor."/".time().$_FILES['hakkimizda_hakkimizdayol']['name']); 

			$duzenle=$db->prepare("UPDATE hakkimizda SET
				hakkimizda_icerik=:icerik,
				hakkimizda_baslik=:baslik,
				hakkimizda_baslik2=:baslik2,
				hakkimizda_yol=:hakkimizdayol	
				WHERE hakkimizda_id=1");
			$update=$duzenle->execute(array(
				'icerik' => $_POST['hakkimizda_icerik'],
				'baslik' => $_POST['hakkimizda_baslik'],
				'baslik2' => $_POST['hakkimizda_baslik2'],
				'hakkimizdayol' => "images/".time().$_FILES['hakkimizda_hakkimizdayol']['name'].""
			));
		}else{

			$duzenle=$db->prepare("UPDATE hakkimizda SET
				hakkimizda_icerik=:icerik,
				hakkimizda_baslik=:baslik,
				hakkimizda_baslik2=:baslik2
				WHERE hakkimizda_id=1");
			$update=$duzenle->execute(array(
				'icerik' => $_POST['hakkimizda_icerik'],
				'baslik' => $_POST['hakkimizda_baslik'],
				'baslik2' => $_POST['hakkimizda_baslik2']
			));
		} 
	}


	if ($update) {

		Header("Location:hakkimizda.php?hakkimizda_id=$hakkimizda_id&durum=ok");

	} else {

		Header("Location:hakkimizda.php?durum=no");
	}

}


if (isset($_POST['etkinliklerkaydet'])) {

	$klasor="../images";
	$dosya_sayi=count($_FILES['etkinlikler_etkinlikleryol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['etkinlikler_etkinlikleryol']['name'])){ 
			move_uploaded_file($_FILES['etkinlikler_etkinlikleryol']['tmp_name'],$klasor."/".time().$_FILES['etkinlikler_etkinlikleryol']['name']); 
		} 
	}
	
	$kaydet=$db->prepare("INSERT INTO etkinlikler SET
		etkinlikler_baslik=:baslik,
		etkinlikler_tarih=:tarih,
		etkinlikler_icerik=:icerik,
		etkinlikler_yol=:etkinlikleryol");
	$insert=$kaydet->execute(array(
		'baslik' => $_POST['etkinlikler_baslik'],
		'tarih' => $_POST['etkinlikler_tarih'],
		'icerik' => $_POST['etkinlikler_icerik'],
		'etkinlikleryol' => "images/".time().$_FILES['etkinlikler_etkinlikleryol']['name'].""
	));

	if ($insert) {

		Header("Location:etkinlikler.php?durum=ok");

	} else {

		Header("Location:etkinlikler.php?durum=no");
	}

}



if (isset($_POST['haberlerkaydet'])) {

	$klasor="../images";
	$dosya_sayi=count($_FILES['haberler_haberleryol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['haberler_haberleryol']['name'])){ 
			move_uploaded_file($_FILES['haberler_haberleryol']['tmp_name'],$klasor."/".time().$_FILES['haberler_haberleryol']['name']); 
		} 
	}
	
	$kaydet=$db->prepare("INSERT INTO haberler SET
		haberler_baslik=:baslik,
		haberler_detay=:detay,
		haberler_yol=:haberleryol");
	$insert=$kaydet->execute(array(
		'baslik' => $_POST['haberler_baslik'],
		'detay' => $_POST['haberler_detay'],
		'haberleryol' => "images/".time().$_FILES['haberler_haberleryol']['name'].""
	));

	if ($insert) {

		Header("Location:haberler.php?durum=ok");

	} else {

		Header("Location:haberler.php?durum=no");
	}

}

if (isset($_POST['etkinliklerduzenle'])) {
	$klasor="../images";
	$dosya_sayi=count($_FILES['etkinlikler_etkinlikleryol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['etkinlikler_etkinlikleryol']['name'])){ 
			move_uploaded_file($_FILES['etkinlikler_etkinlikleryol']['tmp_name'],$klasor."/".time().$_FILES['etkinlikler_etkinlikleryol']['name']); 

			$duzenle=$db->prepare("UPDATE etkinlikler SET
				etkinlikler_icerik=:icerik,
				etkinlikler_tarih=:tarih,
				etkinlikler_baslik=:baslik,
				etkinlikler_yol=:etkinlikleryol	
				WHERE etkinlikler_id={$_POST['etkinlikler_id']}");
			$update=$duzenle->execute(array(
				'icerik' => $_POST['etkinlikler_icerik'],
				'tarih' => $_POST['etkinlikler_tarih'],
				'baslik' => $_POST['etkinlikler_baslik'],
				'etkinlikleryol' => "/images/".time().$_FILES['etkinlikler_etkinlikleryol']['name'].""
			));
		}else{

			$duzenle=$db->prepare("UPDATE etkinlikler SET
				etkinlikler_icerik=:icerik,
				etkinlikler_tarih=:tarih,
				etkinlikler_baslik=:baslik
				WHERE etkinlikler_id={$_POST['etkinlikler_id']}");
			$update=$duzenle->execute(array(
				'icerik' => $_POST['etkinlikler_icerik'],
				'tarih' => $_POST['etkinlikler_tarih'],
				'baslik' => $_POST['etkinlikler_baslik']
			));
		} 
	}


	if ($update) {

		Header("Location:etkinlikler.php?etkinlikler_id=$etkinlikler_id&durum=ok");

	} else {

		Header("Location:etkinlikler.php?durum=no");
	}

}

if (isset($_POST['haberlerduzenle'])) {
	$klasor="../images";
	$dosya_sayi=count($_FILES['haberler_haberleryol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['haberler_haberleryol']['name'])){ 
			move_uploaded_file($_FILES['haberler_haberleryol']['tmp_name'],$klasor."/".time().$_FILES['haberler_haberleryol']['name']); 

			$duzenle=$db->prepare("UPDATE haberler SET
				haberler_detay=:detay,
				haberler_baslik=:baslik,
				haberler_yol=:haberleryol	
				WHERE haberler_id={$_POST['haberler_id']}");
			$update=$duzenle->execute(array(
				'detay' => $_POST['haberler_detay'],
				'baslik' => $_POST['haberler_baslik'],
				'haberleryol' => "/images/".time().$_FILES['haberler_haberleryol']['name'].""
			));
		}else{

			$duzenle=$db->prepare("UPDATE haberler SET
				haberler_detay=:detay,
				haberler_baslik=:baslik
				WHERE haberler_id={$_POST['haberler_id']}");
			$update=$duzenle->execute(array(
				'detay' => $_POST['haberler_detay'],
				'baslik' => $_POST['haberler_baslik']
			));
		} 
	}


	if ($update) {

		Header("Location:haberler.php?haberler_id=$haberler_id&durum=ok");

	} else {

		Header("Location:haberler.php?durum=no");
	}

}

if(isset($_GET['etkinliklersil'])){
	if ($_GET['etkinliklersil']=="ok") {
	//echo "string"; exit();
		$sil=$db->prepare("DELETE from etkinlikler where etkinlikler_id=:etkinlikler_id");
		$kontrol=$sil->execute(array(
			'etkinlikler_id' => $_GET['etkinlikler_id']
		));

		if ($kontrol) {

			Header("Location:etkinlikler.php");

		} else {

			Header("Location:hata.php");
		}

	}
}

if(isset($_GET['haberlersil'])){
	if ($_GET['haberlersil']=="ok") {
	//echo "string"; exit();
		$sil=$db->prepare("DELETE from haberler where haberler_id=:haberler_id");
		$kontrol=$sil->execute(array(
			'haberler_id' => $_GET['haberler_id']
		));

		if ($kontrol) {

			Header("Location:haberler.php");

		} else {

			Header("Location:hata.php");
		}

	}
}

if (isset($_POST['resimkaydet'])) {

	$klasor="../images";
	$dosya_sayi=count($_FILES['resim_resimyol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['resim_resimyol']['name'])){ 
			move_uploaded_file($_FILES['resim_resimyol']['tmp_name'],$klasor."/".time().$_FILES['resim_resimyol']['name']); 
		} 
	}
	
	$kaydet=$db->prepare("INSERT INTO resim SET
		resim_sira=:sira,
		resim_durum=:durum,
		resim_yol=:resimyol");
	$insert=$kaydet->execute(array(
		'sira' => $_POST['resim_sira'],
		'durum' => $_POST['resim_durum'],
		'resimyol' => "images/".time().$_FILES['resim_resimyol']['name'].""
	));

	if ($insert) {

		Header("Location:galeri.php?durum=ok");

	} else {

		Header("Location:galeri.php?durum=no");
	}

}


if (isset($_POST['ayarkaydet'])) {
	$klasor="../images";
	$dosya_sayi=count($_FILES['ayar_ayaryol']['name']); 
	for($i=0;$i<$dosya_sayi;$i++){ 
		//echo $_FILES['resim_resimyol']['name'];exit;
		if(!empty($_FILES['ayar_ayaryol']['name'])){ 
			move_uploaded_file($_FILES['ayar_ayaryol']['tmp_name'],$klasor."/".time().$_FILES['ayar_ayaryol']['name']); 

			$ayarkaydet=$db->prepare("UPDATE ayar SET
				ayar_adres=:adres,
				ayar_telefon=:telefon,
				ayar_mail=:mail,
				ayar_facebook=:facebook,
				ayar_instagram=:instagram,
				ayar_twitter=:twitter,
				ayar_aciklama=:aciklama,
				ayar_yol=:ayaryol	
				WHERE ayar_id=1");
			$update=$ayarkaydet->execute(array(
				'adres' => $_POST['ayar_adres'],
				'telefon' => $_POST['ayar_telefon'],
				'mail' => $_POST['ayar_mail'],
				'facebook' => $_POST['ayar_facebook'],
				'instagram' => $_POST['ayar_instagram'],
				'twitter' => $_POST['ayar_twitter'],
				'aciklama' => $_POST['ayar_aciklama'],
				'ayaryol' => "images/".time().$_FILES['ayar_ayaryol']['name'].""
			));

		}else{

			$ayarkaydet=$db->prepare("UPDATE ayar SET
				ayar_adres=:adres,
				ayar_telefon=:telefon,
				ayar_mail=:mail,
				ayar_facebook=:facebook,
				ayar_instagram=:instagram,
				ayar_twitter=:twitter,
				ayar_aciklama=:aciklama
				WHERE ayar_id=1");
			$update=$ayarkaydet->execute(array(
				'adres' => $_POST['ayar_adres'],
				'telefon' => $_POST['ayar_telefon'],
				'mail' => $_POST['ayar_mail'],
				'facebook' => $_POST['ayar_facebook'],
				'instagram' => $_POST['ayar_instagram'],
				'twitter' => $_POST['ayar_twitter'],
				'aciklama' => $_POST['ayar_aciklama']
			));
		} 
	}


	if ($update) {

		Header("Location:ayar.php?durum=ok");

	} else {

		Header("Location:ayar.php?durum=no");
	}

}





?>