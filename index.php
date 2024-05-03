<!DOCTYPE html>
<html lang="en">
<head>
	<title>SysEng</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script type="text/javascript">

/*	$(function() {
    //hang on event of form with id=myform
    $("#myform").submit(function(e) {

        //prevent Default functionality
        e.preventDefault();

        //get the action-url of the form
       

    });

});*/
	
	function login1(numero)
	{
		switch (numero) 
		{
			case 1:
				document.getElementById('login').action = "/solutions/login.php";
				break;
			case 2:
				document.getElementById('login').action = "/triunion/login.php";
				break;
			case 3:
				document.getElementById('login').action = "/service/login.php";
				break; 
			case 4:
				document.getElementById('login').action = "/okam/login.php";
				break; 
		}
       //$("#login").submit();
	}


</script>
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" name="login" id="login" method="post" >
					<span class="login100-form-title p-b-43">
						Faça o login para continuar
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Informe o Usuário">
						<input class="input100" type="text" name="usuario" id="usuario" require="required">
						<span class="focus-input100"></span>
						<span class="label-input100">Usuário</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Informe a Senha">
						<input class="input100" type="password" name="senha" id="senha" require="required">
						<span class="focus-input100"></span>
						<span class="label-input100">Senha</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn-01 login100-form-btn" onClick="login1(1);">
							WMF Solutions
						</button>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn-02 login100-form-btn" onClick="login1(2);">
							Triunion
						</button>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn-03 login100-form-btn" onClick="login1(3);">
							Ceross
						</button>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn-04 login100-form-btn" onClick="login1(4);">
							Okam Sistemas
						</button>
					</div>
					
					
				</form>

				<div class="login100-more" style="background-image: url('<?php echo "images/bg-".rand(1,83).".jpg";?>');">
				</div>
			</div>
		</div>
	</div>
	
	

	

</body>
</html>