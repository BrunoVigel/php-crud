<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <div>
        <input type="hidden" name="acao" value="cadastrar">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
    </div>
    <div>
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="data_nasc">
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>