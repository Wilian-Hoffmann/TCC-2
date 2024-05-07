<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $produto = $_POST["produto"];
            $usuario = $_POST["usuario"];
            $data_demanda = $_POST["data_demanda"];
            $meta = $_POST["meta"];

            $sql = "INSERT INTO demandas (produto, usuario, data_demanda,meta) 
                    VALUES('{$produto}', '{$usuario}', '{$data_demanda}', '{$meta}') ";
            
            $res = $conn->query($sql);

            if($res==true){
                 print"<script>alert('cadastro com sucesso')</script>";
                 print"<script>location.href='?page=listar'</script>";
            }else{
                print"<script>alert('Não foi possivel cadastrar')</script>";
                print"<script>location.href='?page=listar'</script>";
            }
            break;
        case 'editar':
            $produto = $_POST["produto"];
            $usuario = $_POST["usuario"];
            $data_demanda = $_POST["data_demanda"];
            $meta = $_POST["meta"];

            $sql = "UPDATE demandas SET produto='{$produto}', usuario='{$usuario}', data_demanda='{$data_demanda}', meta='{$meta}'
                    WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                 print"<script>alert('Editado com sucesso')</script>";
                 print"<script>location.href='?page=listar'</script>";
            }else{
                print"<script>alert('Não foi possivel editar')</script>";
                print"<script>location.href='?page=listar'</script>";
            }


            break;

        case 'excluir':
            $sql = "DELETE FROM demandas WHERE id=".$_REQUEST["id"];
           
            $res = $conn->query($sql);

            if($res==true){
                 print"<script>alert('Excluido com sucesso')</script>";
                 print"<script>location.href='?page=listar'</script>";
            }else{
                print"<script>alert('Não foi possivel Excluir')</script>";
                print"<script>location.href='?page=listar'</script>";
            }
           
            break;
    }