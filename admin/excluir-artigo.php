<?php

require '../config.php';
require '../src/Artigo.php';
require '../src/redirecionar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $obj_artigo = new Artigo($mysql);
    $obj_artigo->remover($_POST['id']);

    redirecionar('index.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Você realmente deseja excluir o artigo?</h1>
        <form method="post" action="excluir-artigo.php ">
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <button class="botao">Excluir</button>
            </p>
        </form>
    </div>
</body>

</html>