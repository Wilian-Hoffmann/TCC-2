<h1>Editar Demandas</h1>
<?php
    $sql = "SELECT * FROM demandas WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome do Produto</label>
        <input type="text" name="produto" value="<?php print $row->produto; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Usuario</label>
        <input type="text" name="usuario" value="<?php print $row->usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data_demanda" value="<?php print $row->data_demanda; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Meta</label>
        <input type="number" name="meta" value="<?php print $row->meta; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>