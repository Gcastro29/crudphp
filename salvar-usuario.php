<?php
    switch($_REQUEST["acao"]){
        case "cadastrar":
            $nome=$_POST["nome"];
            $email=$_POST["email"];
            $senha=md5($_POST["password"]);
            $data_nasc=$_POST["data_nasc"];

            $sql="INSERT INTO usuarios (nome,email,senha,data_nascimento) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";
            $res=$conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com Sucesso!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        case "editar":
            $nome=$_POST["nome"];
            $email=$_POST["email"];
            $senha=md5($_POST["password"]);
            $data_nasc=$_POST["data_nasc"];

            $sql="UPDATE usuarios SET 
                                    nome='{$nome}',
                                    email='{$email}',
                                    senha='{$senha}',
                                    data_nascimento='{$data_nasc}' WHERE id=".$_REQUEST["id"];
            $res=$conn->query($sql);

            if($res==true){
                print "<script>alert('Atualizado com Sucesso!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel atualizar!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case "excluir":
            $sql="DELETE FROM usuarios WHERE id=".$_REQUEST["id"];        
            $res=$conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com Sucesso!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel Excluir!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;


    }
?>