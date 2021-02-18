<?php
	$this->assign('title','Almoxarifado | Fornecedores');
	$this->assign('nav','fornecedores');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/fornecedores.js").wait(function(){
		$(document).ready(function(){
			page.init();
		});
		
		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function(){
			if (!page.isInitialized) page.init();
		},1000);
	});
</script>

<div class="container">

<h1>
	<i class="icon-th-list"></i> Fornecedores
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Procurar..." />
		<button class='btn add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="fornecedorCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_IdFornecedor">Id Fornecedor<% if (page.orderBy == 'IdFornecedor') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NomeFantasia">Nome Fantasia<% if (page.orderBy == 'NomeFantasia') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_RazaoSocial">Razao Social<% if (page.orderBy == 'RazaoSocial') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Cnpj">Cnpj<% if (page.orderBy == 'Cnpj') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Email">Email<% if (page.orderBy == 'Email') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>

			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('idFornecedor')) %>">
				<td><%= _.escape(item.get('idFornecedor') || '') %></td>
				<td><%= _.escape(item.get('nomeFantasia') || '') %></td>
				<td><%= _.escape(item.get('razaoSocial') || '') %></td>
				<td><%= _.escape(item.get('cnpj') || '') %></td>
				<td><%= _.escape(item.get('email') || '') %></td>

			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	
	<script type="text/template" id="fornecedorModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idFornecedorInputContainer" class="control-group">
					<label class="control-label" for="idFornecedor">Id Fornecedor</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="idFornecedor"><%= _.escape(item.get('idFornecedor') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nomeFantasiaInputContainer" class="control-group">
					<label class="control-label" for="nomeFantasia">Nome Fantasia</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nomeFantasia" placeholder="Nome Fantasia" value="<%= _.escape(item.get('nomeFantasia') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="razaoSocialInputContainer" class="control-group">
					<label class="control-label" for="razaoSocial">Razao Social</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="razaoSocial" placeholder="Razao Social" value="<%= _.escape(item.get('razaoSocial') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cnpjInputContainer" class="control-group">
					<label class="control-label" for="cnpj">Cnpj</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cnpj" placeholder="Cnpj" value="<%= _.escape(item.get('cnpj') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="emailInputContainer" class="control-group">
					<label class="control-label" for="email">Email</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="email" placeholder="Email" value="<%= _.escape(item.get('email') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="telefoneInputContainer" class="control-group">
					<label class="control-label" for="telefone">Telefone</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="telefone" placeholder="Telefone" value="<%= _.escape(item.get('telefone') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cepInputContainer" class="control-group">
					<label class="control-label" for="cep">Cep</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cep" placeholder="Cep" value="<%= _.escape(item.get('cep') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="enderecoInputContainer" class="control-group">
					<label class="control-label" for="endereco">Endereco</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="endereco" placeholder="Endereco" value="<%= _.escape(item.get('endereco') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="bairroInputContainer" class="control-group">
					<label class="control-label" for="bairro">Bairro</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="bairro" placeholder="Bairro" value="<%= _.escape(item.get('bairro') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="complementoInputContainer" class="control-group">
					<label class="control-label" for="complemento">Complemento</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="complemento" placeholder="Complemento" value="<%= _.escape(item.get('complemento') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cidadeInputContainer" class="control-group">
					<label class="control-label" for="cidade">Cidade</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cidade" placeholder="Cidade" value="<%= _.escape(item.get('cidade') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="estadoInputContainer" class="control-group">
					<label class="control-label" for="estado">Estado</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="estado" placeholder="Estado" value="<%= _.escape(item.get('estado') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="representanteInputContainer" class="control-group">
					<label class="control-label" for="representante">Representante</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="representante" placeholder="Representante" value="<%= _.escape(item.get('representante') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<form id="deleteFornecedorButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteFornecedorButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Deletar Fornecedor</button>
						<span id="confirmDeleteFornecedorContainer" class="hide">
							<button id="cancelDeleteFornecedorButton" class="btn btn-mini">Cancelar</button>
							<button id="confirmDeleteFornecedorButton" class="btn btn-mini btn-danger">Confirmar</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<div class="modal hide fade" id="fornecedorDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Fornecedor
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="fornecedorModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button id="saveFornecedorButton" class="btn btn-primary">Salvar</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="fornecedorCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newFornecedorButton" class="btn btn-primary">Add Fornecedor</button>
	</p>

</div> 

<?php
	$this->display('_Footer.tpl.php');
?>
