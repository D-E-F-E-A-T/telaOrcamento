<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle pull-left">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Administrador</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Sair</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main">
		<div class="menu">
			<ul>
            <li <?php if($viewVar['nameController'] == "HomeController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>" >Home</a>
                </li>
                <li <?php if($viewVar['nameController'] == "UsuarioController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/usuario/cadastro" >Cadastro de Usuário</a>
                </li>
                <li <?php if($viewVar['nameController'] == "ProdutoController" && ($viewVar['nameAction'] == "" || $viewVar['nameAction'] == "index")){ ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/produto">Listar  Produto</a>
                </li>
                <li <?php if($viewVar['nameController'] == "ProdutoController" && $viewVar['nameAction'] == "cadastro") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/produto/cadastro" >Cadastro de Produto</a>
                </li>
                <li <?php if($viewVar['nameController'] == "ClienteController" && $viewVar['nameAction'] == "cadastroCliente") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/cliente/cadastroCliente" >Cadastro de Cliente</a>
                </li>		</ul>
		</div>
</nav>


