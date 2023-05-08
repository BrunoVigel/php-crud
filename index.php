<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="?page=novo">Novo Usuário</a>
                </li>
                <li>
                    <a href="?page=listar">Listar Usuários</a>
                </li>
            </ul>
        </nav>
    </header>

    <div>
    <?php 
        include("config.php");
        switch(@$_REQUEST["page"]) {
            case "novo":
                include("novo-usuario.php");
            break;
            case "listar":
                include("listar-usuario.php");
            break;
            case "salvar";
                include("salvar-usuario.php");
            break;
            case "editar";
                include("editar-usuario.php");
            break;
            default:
                print "<h1>Bem vindos!</h1>";
        }
    ?>
    </div>
</body>
</html>