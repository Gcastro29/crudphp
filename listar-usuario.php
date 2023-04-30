<h1 style="text-align:center;">Listar Usuário</h1>
<?php
    $sql="SELECT * FROM usuarios";
    $res=$conn->query($sql);
    $qtd=$res->num_rows;

    if($qtd>0){
        print "<table class='container table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>NOME</th>";
        print "<th>EMAIL</th>";
        print "<th>DATA_NASCIMENTO</th>";
        print "<th>AÇÕES</th>";
        print "</tr>";
        while($row=$res->fetch_object()){
          print "<tr>";
            print "<td>". $row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>" .$row->data_nascimento."</td>";
            print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td>";
          print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não foi encontrado nenhum resultado!!!</p>";
    }

?>