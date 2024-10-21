<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JipinHemu - Painel Adm</title>
    <link rel="stylesheet" href="css/painel.css">
</head>

<body>
    <div class="header1">
        <h1>Painel - Adminstração</h1>
    </div>
    <div class="header2">
        <h2>Ajustes abaixo:</h2>
    </div>

    <div class="container">
        <ul>
            <li class="item1"><a href="main_pag/category/modificar.php">Página principal</a></li>
            <li class="item2"><a href="index.php">Sair</a></li>
        </ul>
    </div>

    <?php
    session_start();

    if (!isset($_SESSION['usuarios'])) {
        header("Location: login.php");
        exit();
    }

    if ($_SESSION['usuarios']['nivel'] != 'admin') {
        echo "<script>
        window.alert('Você não tem autorização para acessar essa página!');
        </script>";
        header("Refresh: 0, url=main_pag/category/principal.php");
        exit();
    }

    ?>

</body>
</html>