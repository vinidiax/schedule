<?php
    $nome       = isset($postData['nome']) ? $postData['nome'] : '';
    $email      = isset($postData['email']) ? $postData['email'] : '';
    $telefone   = isset($postData['telefone']) ? $postData['telefone'] : '';
    $celular    = isset($postData['celular']) ? $postData['celular'] : '';
    $genero     = isset($postData['genero']) ? $postData['genero'] : '';

if(!is_bool($dadosVerificados)) :
    ?>
    <div class="alert alert-danger" id="alert"><?=$dadosVerificados?></div>
<?php
endif;

  if(isset($menssagemSucesso)) :
 ?>
    <div class="alert alert-success" id="alert"><?=$menssagemSucesso?></div>
<?php
    endif;

?>

<div class="alert-danger alert" id="validate"></div>

<h3>Editar contato:</h3>

<form action="?module=site&controller=agenda&action=editar&id=<?=$id?>" method="post" id="register-form">

    <label for="nome">Nome</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?=$nome?>" required>
    </div>

    <label for="nome">Gênero</label>
    <div class="input-group mb-3">
        <select name="genero" required class="form-control">
            <option value="">== Selecione ==</option>
            <option value="1" <?=$genero == 1 ? 'selected' : ''?>>Masculino</option>
            <option value="2" <?=$genero == 2 ? 'selected' : ''?>>Feminino</option>
        </select>

    </div>

    <label for="email">E-mail</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="<?=$email?>" aria-describedby="basic-addon2" onblur="isEmail(this.value)" >
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">@exemplo.com.br</span>
        </div>
    </div>

    <label for="telefone">Telefone</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$telefone?>" placeholder="(__) ____-____" aria-describedby="basic-addon3">
    </div>

    <label for="celular">Celular</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="celular" name="celular" value="<?=$celular?>" placeholder="(__)_ ____-____" aria-describedby="basic-addon3">
    </div>

    <div class="input-group">
        <button type="submit" class="btn btn-dark">Salvar</button>
        <a href="/" class="btn btn-light">Cancelar</a>
    </div>

</form>

