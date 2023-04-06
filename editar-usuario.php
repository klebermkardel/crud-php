<h1>Editar Usuário</h1>
<?php

    // Busca usuário com id específica no banco de dados
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">E-mail: </label>
        <input type="email" id="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="senha">Senha: </label>
        <input type="password" id="senha" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="data_nasc">Data de Nascimento: </label>
        <input type="date" id="data_nasc" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>