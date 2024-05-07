<h1>Demandas</h1>
<?php
    $sql = "SELECT * FROM demandas";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Produto</th>";
        print "<th>Usuario</th>";
        print "<th>Data da demanda</th>";
        print "<th>Metas</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->produto."</td>";
            print "<td>".$row->usuario."</td>";
            print "<td>".$row->data_demanda."</td>";
            print "<td>".$row->meta."</td>";
            print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        
                        <button onclick=\"if(confirm('Tem certesa que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" 
                        class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Nem uma demanda encontrada</p>";
    }

?>