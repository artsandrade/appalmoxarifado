<?php
$this->assign('title', 'Almoxarifado | Usuarios');
$this->assign('nav', 'usuarios');

$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/usuarios.js").wait(function() {
		$(document).ready(function() {
			page.init();
		});

		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function() {
			if (!page.isInitialized) page.init();
		}, 1000);
	});
</script>

<div class="container">

	<h1>
		<i class="icon-th-list"></i> Usuários
		<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
		<span class='input-append pull-right searchContainer'>
			<input id='filter' type="text" placeholder="Procurar..." />
			<button class='btn add-on'><i class="icon-search"></i></button>
		</span>
	</h1>

	<script type="text/template" id="usuarioCollectionTemplate">
		<table class="collection table table-dark table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_IdUsuario">Id Usuario<% if (page.orderBy == 'IdUsuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Nome">Nome<% if (page.orderBy == 'Nome') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NMatricula">N Matricula<% if (page.orderBy == 'NMatricula') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Email">Email<% if (page.orderBy == 'Email') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Login">Login<% if (page.orderBy == 'Login') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>

			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('idUsuario')) %>">
				<td><%= _.escape(item.get('idUsuario') || '') %></td>
				<td><%= _.escape(item.get('nome') || '') %></td>
				<td><%= _.escape(item.get('nMatricula') || '') %></td>
				<td><%= _.escape(item.get('email') || '') %></td>
				<td><%= _.escape(item.get('login') || '') %></td>

			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<script type="text/template" id="usuarioModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idUsuarioInputContainer" class="control-group">
					<label class="control-label" for="idUsuario">Id Usuario</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="idUsuario"><%= _.escape(item.get('idUsuario') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nomeInputContainer" class="control-group">
					<label class="control-label" for="nome">Nome</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nome" placeholder="Nome" value="<%= _.escape(item.get('nome') || '') %>" required>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nMatriculaInputContainer" class="control-group">
					<label class="control-label" for="nMatricula">N Matricula</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nMatricula" placeholder="N Matricula" value="<%= _.escape(item.get('nMatricula') || '') %>" required>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="emailInputContainer" class="control-group">
					<label class="control-label" for="email">Email</label>
					<div class="controls inline-inputs">
						<input type="email" class="input-xlarge" id="email" placeholder="Email" value="<%= _.escape(item.get('email') || '') %>" required>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="loginInputContainer" class="control-group">
					<label class="control-label" for="login">Login</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="login" placeholder="Login" value="<%= _.escape(item.get('login') || '') %>" required>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="senhaInputContainer" class="control-group">
					<label class="control-label" for="senha">Senha</label>
					<div class="controls inline-inputs">
						<input type="password" class="input-xlarge" id="senha" placeholder="Senha" value="<%= _.escape(item.get('senha') || '') %>" required>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nivelAcessoInputContainer" class="control-group">
					<label class="control-label" for="nivelAcesso">Nivel Acesso</label>
					<div class="controls inline-inputs">
						<select class="input-xlarge" id="nivelAcesso" required>
						<option value="Administrador" <% if (item.get('nivelAcesso') == 'Administrador') { selected }%>>Administrador</option>
						<option value="Almoxarife" <% if (item.get('nivelAcesso') == 'Almoxarife') { selected }%>>Almoxarife</option>
						<option value="Colaborador">Colaborador</option>
						<option value="Gerente">Gerente</option>
						</select>
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<form id="deleteUsuarioButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteUsuarioButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Deletar Usuario</button>
						<span id="confirmDeleteUsuarioContainer" class="hide">
							<button id="cancelDeleteUsuarioButton" class="btn btn-mini">Cancelar</button>
							<button id="confirmDeleteUsuarioButton" class="btn btn-mini btn-danger">Confirmar</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<div class="modal hide fade" id="usuarioDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Usuario
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="usuarioModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal">Cancelar</button>
			<button id="saveUsuarioButton" class="btn btn-primary">Salvar</button>
		</div>
	</div>

	<div id="collectionAlert"></div>

	<div id="usuarioCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newUsuarioButton" class="btn btn-primary">Adicionar usuário</button>
	</p>

</div> 

<?php
$this->display('_Footer.tpl.php');
?>