<?php


?>

<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
<div class="mb-3">
    <label for="">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome" required>
</div>
<div class="mb-3">
    <label for="">E-mail</label>
    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
</div>
<div class="mb-3">
    <label for="">Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
</div>
<div class="mb-3">
    <label for="">Data Nascimento</label>
    <input type="date" name="data_nasc" class="form-control" placeholder="Nome" required>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary" >Enviar</button>
</div>
</form>