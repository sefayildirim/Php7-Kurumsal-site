
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>81 İl - 81 Hayat Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/bonart.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!--===============================================================================================-->
</head>
<body>
	<?php
	session_start(); 
	include("baglan.php");  


	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login/images/hayal.png" alt="IMG">
				</div>
				<?php 
				if($_POST)
				{
					$name =$_POST["txtKadi"];
					$pass =md5($_POST["txtParola"]);
					$query  = $db->query("SELECT * FROM kullanicilar WHERE kadi='$name' && parola='$pass'",PDO::FETCH_ASSOC);

					if ( $say = $query -> rowCount() ){
						if( $say > 0 ){

							$_SESSION['oturum']=true;
							$_SESSION['name']=$name;
							$_SESSION['pass']=$pass;

							header("Location:index.php");

						}else{
							?> <script>swal("Hata!", "Oturum Açılmadı Hata!", "warning");</script><?php
						}
					}else{
						?> <script>swal("Hata!", "Kullanıcı Adı Veya Parola Yanlış!", "error");</script><?php

					}
				}



				?>

				<form id="form1" method="post">
					<span class="login100-form-title">
						81 İl 81 Hayal Yönetim Paneli
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" ID="txtKadi" name="txtKadi" class="form-control" placeholder="Kullanıcı adı"
						   value='<?php echo @$txtKadi ?>'/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" ID="txtParola" name="txtParola" class="form-control" name="kullanici_password"  placeholder="Şifreniz">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" ID="btnGiris">
							Giriş Yap
						</button>

					</div>



					<div class="text-center p-t-136">
					</div>
					<div class="text-center">

					</div>


				</form>
			</div>
		</div>
	</div>
	
	

	
	<!--===============================================================================================-->	
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>