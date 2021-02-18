<?php
	$this->assign('title','Almoxarifado | Home');
	$this->assign('nav','home');

	$this->display('_Header.tpl.php');
	
?>
<script src="styles\style.css"></script>
	<div class="container">

		
		<div class="hero-unit">
			<center>
			<h1 class="nome" >Almoxarifado </h1>
			</center>
			<p>Esta aplicação foi feita por um tabalho de faculdade da máteria TÓPICOS ESPECIAIS EM ENGENHARIA DE SOFTWARE </p>
			
			<p>Pelo professor Geraldo Corrêa do curso de Sistemas de Informação<p>
			<p><em>Feito pelos alunos Ana Paula F. Marques, André Augusto A. Machado, Arielle G. de Freitas, Arthur S. Andrade, Elias M. M. da Silva, Guilherme B. Corrêa, Lucas H. Soares Cruz, Matheus O. Silva </em></p>
			<Center>
			<a class="btn btn-primary btn-large" data-toggle="modal" href="./fornecedores">Fornecedores &raquo;</a>
			<a class="btn btn-primary btn-large" data-toggle="modal" href="./usuarios">Usuários &raquo;</a></p>
			
			</Center>
		</div>

		
		
			
	</div> 

<?php
	$this->display('_Footer.tpl.php');
?>