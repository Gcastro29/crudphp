<?php
    $sql="SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res=$conn->query($sql);
    $row=$res->fetch_object();
?>

<form class="container" action="?page=salvar" method="POST">
    <input  type="hidden" name="acao" value="editar">
    <input  type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome;?>">
     </div>

     <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email;?>">
     </div>

     <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control" required>
     </div>

     <div class="mb-3">
        <label>Data Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nascimento;?>">
     </div>

     <button type="submit" class="btn btn-primary">Enviar</button>


</form>