<?php

$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $con->query($sql);
$row = $res->fetch_object();

?>

<h1>Editar Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
   <input type="hidden" name="id" value="<?php print $row->id; ?>">
<div class="mb-3">
    <label for="">Nome</label>
    <input type="text" name="nome" class="form-control" value="<?php print $row->nome;?>" placeholder="Nome" require>
</div>
<div class="mb-3">
    <label for="">E-mail</label>
    <input type="email" name="email" class="form-control" value="<?php print $row->email;?>" placeholder="E-mail" require>
</div>
<div class="mb-3">
    <label for="">Senha</label>
    <input type="password" type="hidden" name="senha" class="form-control"  placeholder="Senha" required>
</div>
<div class="mb-3">
    <label for="">Data Nascimento</label>
    <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc;?>" placeholder="Nome" require>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary" >Enviar</button>
</div>
</form>