<h1>Em Andamento</h1>
<?php

    $sql = "SELECT * FROM demandas ORDER BY data_demanda DESC";
    
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
        print "<th>AProdução</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->produto."</td>";
            print "<td>".$row->usuario."</td>";
            print "<td>".$row->data_demanda."</td>";
            print "<td>".$row->meta."</td>";
            print "<td>".$row->producao."</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Nem uma demanda encontrada</p>";
    }

?>