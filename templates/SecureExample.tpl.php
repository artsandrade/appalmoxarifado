<?php
<<<<<<< HEAD
	$this->assign('title','Tela de Login');
	$this->assign('nav','secureexample');
=======
$this->assign('title', 'Almoxarifado | Login');
$this->assign('nav', 'secureexample');
>>>>>>> 7d9f6470a7ff7fbb882d2c5dba15f7cee5ef0078

$this->display('_Header.tpl.php');
?>

<div class="container">

	<?php if ($this->feedback) { ?>
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<?php $this->eprint($this->feedback); ?>
		</div>
	<?php } ?>

	<!-- #### this view/tempalate is used for multiple pages.  the controller sets the 'page' variable to display differnet content ####  -->

	<?php if ($this->page == 'login') { ?>
<<<<<<< HEAD
	
		
			<h1>Entrar</h1>
			
			
				<?php if (isset($this->currentUser)) { ?>
					<a href="logout" class="btn btn-primary btn-large">Logout</a>
				<?php } ?>
			</p>
		</div>
	
		<form  method="post" action="login">
			<fieldset class="hero-unit">
				<center>
			<legend>Coloque suas credenciais</legend>

				<div class="control-group">
				<input id="username" name="username" type="text" placeholder="Usuario..." />
				</div>
				<div class="control-group">
				<input id="password" name="password" type="password" placeholder="Senha..." />
=======

		<div class="hero-unit">
			<h1>Login - Almoxarifado</h1>
		</div>

		<form class="well" method="post" action="login">
			<fieldset>
				<legend>Insira suas credenciais abaixo</legend>
				<div class="control-group">
					<input id="username" name="username" type="text" placeholder="Login" />
				</div>
				<div class="control-group">
					<input id="password" name="password" type="password" placeholder="Senha" />
>>>>>>> 7d9f6470a7ff7fbb882d2c5dba15f7cee5ef0078
				</div>
				<div class="control-group">
					<button type="submit" class="btn btn-primary">Entrar</button>
				</div>
				</center>
			</fieldset>
<<<<<<< HEAD
	
		</div>
	
=======
		</form>

>>>>>>> 7d9f6470a7ff7fbb882d2c5dba15f7cee5ef0078
	<?php } else { ?>

		<div class="hero-unit">
			<h1>Bem-vindo</h1>
			<p>Área restrita apenas a usuários logados.
				Você está logado como '<strong><?php $this->eprint($this->currentUser->Username); ?></strong>'.</p>
			<Left>
				<a class="btn btn-primary btn-large" data-toggle="modal" href="./fornecedores">Fornecedores &raquo;</a>
				<a class="btn btn-primary btn-large" data-toggle="modal" href="./usuarios">Usuários &raquo;</a></p>
				<a class="btn btn-primary btn-large" data-toggle="modal" href="./logout">Sair &raquo;</a></p>
			</Left>
		</div>
	<?php } ?>

</div> <!-- /container -->

<?php
$this->display('_Footer.tpl.php');
?>