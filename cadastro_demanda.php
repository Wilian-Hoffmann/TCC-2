<h1>Novas Demandas</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Produto</label>
        <input type="text" name="produto" class="form-control">
    </div>
    <div class="mb-3">
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data_demanda" class="form-control">
    </div>
    <div class="mb-3">
        <label>Meta</label>
        <input type="number" name="meta" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>