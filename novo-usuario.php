<h1 style="text-align:center;">Novo Usuário</h1>

<form class="container" action="?page=salvar" method="POST">
    <input  type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
     </div>

     <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
     </div>

     <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
     </div>

     <div class="mb-3">
        <label>Data Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
     </div>

     <button type="submit" class="btn btn-primary">Enviar</button>


</form>