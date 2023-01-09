<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="<?= base_url()?>assets/frontend/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="<?= base_url()?>assets/frontend/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?= base_url()?>assets/frontend/img/bg.svg">
		</div>
		<div class="login-content">
			<?= form_open('anggota_masuk/tambah') ?>
				<img src="<?= base_url()?>assets/frontend/img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		
           		   </div>
           		   <div class="div">
           		   		<h5>Nama</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Alamat</h5>
           		    	<input type="text" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
			<?= form_close() ?>
        </div>
    </div>
    <script type="text/javascript" src="<?=base_url()?>assets/frontend/js/main.js"></script>
</body>
</html>
