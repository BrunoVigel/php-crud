<h1>Editar usuário</h1>

<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <div>
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id ?>">

        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome ?>" id="nome">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="<?php print $row->email ?>"  id="email">
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" required  id="senha">
    </div>
    <div>
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc ?>"  id="data_nasc">
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>