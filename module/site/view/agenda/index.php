<?php if($menssagemSucesso != '') : ?>
    <div class="alert alert-success" id="alert"><?=$menssagemSucesso?></div>
<?php endif; ?>
<?php if($menssagemErro != '') : ?>
    <div class="alert alert-danger" id="alert"><?=$menssagemErro?></div>
<?php endif; ?>
<h3>Buscar contato:</h3>
<form method="post" action="?module=site&controller=agenda&action=index">
    <div class="row" >
        <div class="col-md-3">
            <input type="text" name="nome" class="form-control" placeholder="Nome"/>
        </div>
        <div class="col-md-3">
            <input type="text" name="email" class="form-control" placeholder="E-mail"/>
        </div>
        <div class="col-md-2">
            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone"/>
        </div>
        <div class="col-md-2">
            <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular"/>
        </div>

        <div class="col-md-2">
            <input type="submit" value="Buscar" class="form-control"/>
        </div>

    </div>
</form>

<hr/>

<?php if($contatos->num_rows > 0):?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php while($dados = $contatos->fetch_array()):?>
            <tr>
                <th scope="col"> <?=$dados['contato_id']?> </th>
                <td><?=$dados['contato_nome']?></td>
                <td><?=$dados['contato_email']?></td>
                <td><?=$dados['contato_telefone']?></td>
                <td><?=$dados['contato_celular']?></td>
                <td>
                    <a href="?module=site&controller=agenda&action=editar&id=<?=$dados['contato_id']?>"><img src="public/svg/si-glyph-pencil.svg"/></a>
                    <a href="#" data-href="?module=site&controller=agenda&action=delete&id=<?=$dados['contato_id']?>" data-toggle="modal" data-target="#confirm-delete"><img src="public/svg/si-glyph-delete.svg"/></a>
                </td>
            </tr>
        <?php
            endwhile;
        ?>

    </tbody>
    <tfoot>
        <tr>
            <td colspan="6" align="right"><b>Total de registros: <?=$contatos->num_rows?></b></td>
        </tr>
    </tfoot>
</table>
<?
    $contatos->close();
    else:?>
        <div class="alert alert-info" role="alert">
            Nenhum registro encontrado
        </div>
<?php
    endif;
?>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Confirmar exclusão do contato?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Sim</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-error-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Sim</a>
            </div>
        </div>
    </div>
</div>
