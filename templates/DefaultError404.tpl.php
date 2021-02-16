<?php
	$this->assign('title','appalmoxarifado | File Not Found');
	$this->assign('nav','home');

	$this->display('_Header.tpl.php');
?>

<div class="container">

	<h1>Desculpa...</h1>

	<!-- this is used by app.js for scraping -->
	<!-- ERROR The page you requested was not found /ERROR -->

	<p>A página não foi encontrada.</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>