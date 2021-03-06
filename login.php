<!DOCTYPE HTML>
<html>
	<head>
		<title>Golden Company</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="sourtout icon" href="img/icon.ico">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="jquery.mask.min.js"></script>
		<script>
			$(document).ready(function(){$("#txtCPF").mask("000.000.000-00")})
		</script>
	</head>
	<body>
		<div style="background-image: url(img/bg.jpg);background-size: cover;filter: blur(7px);width:100%;height:100%;z-index:-1;position:absolute;">
		</div>
		<a href="index.php">
			<button class="btn" style="background:black; color: white;border-radius:0px 0px 5px 0px">
				<span class="glyphicon glyphicon-menu-left"></span> Voltar ao site
			</button>
		</a>
			<div style="margin: 200px;margin-top: 10%;margin-bottom:0px;color:white;">
				<h2 align="center">Acesso à Área do Funcionário</h2>
				<form method="post" name="frmLogin" style="margin-left:100px;margin-right:100px;display:flex;flex-direction: column;font-size:24px;align-items: center;" action="admin/checkLogin.php">
					<div class="form-group">
						<label for="txtCPF">CPF:</label>
						<input name="txtCPF" id="txtCPF" type="text" class="form-control" placeholder="Digite seu CPF" style="font-size:24px;">
					</div>
					<div class="form-group">
						<label for="txtSenha">Senha:</label>
						<input name="txtSenha" id="txtSenha" type="password" class="form-control" placeholder="Digite sua senha" style="font-size:24px;">
					</div><br>
					<button class="btn" type="submit" style="background:black; color: white;font-size:28px;width:300px;">
						Entrar
					</button>
				</form>
				<script>
					cpf = document.getElementById("txtCPF");
					pass = document.getElementById("txtSenha");
					
					var error = window.location.search;
					
					if(error == "?cpf"){
					cpf.placeholder = "CPF não cadastrado";
					cpf.style.borderColor = "red";
					cpf.style.borderWidth = "2px";
					}
					if(error == "?pass"){
					pass.placeholder = "Senha incorreta";
					pass.style.borderColor = "red";
					pass.style.borderWidth = "2px";
					}
				</script>
			</div>
		</a>
	</body>
</html>