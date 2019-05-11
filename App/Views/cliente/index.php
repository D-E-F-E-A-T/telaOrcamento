<div class="container">
    <div class="row">
    <br>
    <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/cliente/cadastroCliente" class="btn btn-success btn-sm">Adicionar</a>
        <hr>
    </div>
    <div class="col-md-12">
        <?php if($Sessao::retornaMensagem()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $Sessao::retornaMensagem(); ?>
            </div>
        <?php } ?>

        <?php
            if(!count($viewVar['listaCliente'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum cliente encontrado</div>
        <?php
            } else {
        ?>
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="info">Nome</td>
                        <td class="info">Sobre Nome</td>
                        <td class="info">CPF</td>
                        <td class="info">Data Cadastro</td>
                        <td class="info"></td>
                    </tr>
                    <?php
                        foreach($viewVar['listaCliente'] as $cliente) {
                    ?>
                        <tr>
                            <td><?php echo $produto->getNome(); ?></td>
                            <td>R$ <?php echo $produto->getSobreNome(); ?></td>
                            <td><?php echo $produto->getCpf(); ?></td>
                            <td><?php echo $produto->getDataCadastro()->format('d/m/Y'); ?></td>
                            <td>
                                <a href="http://<?php echo APP_HOST; ?>/cliente/edicao/<?php echo $cliente->getCodCliente(); ?>" class="btn btn-info btn-sm">Editar</a>
                                <a href="http://<?php echo APP_HOST; ?>/cliente/exclusao/<?php echo $cliente->getCodCliente(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        <?php
            }
        ?>
    </div>
</div>
</div>