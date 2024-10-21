<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JipinHemu - Verificação</title>
    <link rel="stylesheet" href="css/painel.css">
</head>

<body>
    <?php
    session_start();

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (isset($dados['login']) && isset($dados['password'])) {
        $dados['password'] = md5($dados['password']);

        $arquivo = "user.json";
        if (file_exists($arquivo)) {
            $arq = file_get_contents($arquivo);
            $arq = json_decode($arq, true);

            if ($arq !== null) {
                foreach ($arq as $key => $vlr) {
                    if (isset($vlr['login']) && isset($vlr['password']) && $vlr['login'] == $dados['login'] && $vlr['password'] == $dados['password']) {
                        $_SESSION['usuarios']['login'] = $vlr['login'];
                        $_SESSION['usuarios']['nome'] = $vlr['nome'];
                        $_SESSION['usuarios']['nivel'] = $vlr['nivel'];

                        if ($vlr['nivel'] == 'usuario') {
                            header("Location: main_pag/category/principal.php");
                            exit();
                        } elseif ($vlr['nivel'] == 'admin') {
                            header("Location: main_pag/category/principal.php");
                            exit();
                        }
                    }
                }
            }
        } else {
            echo "<script>
        window.alert('Dados não existentes! Procure um administrador!');
        </script>";
            header("Refresh: 0; url=index.php");
        }
    }

    echo "<script>
    window.alert('Usuário não existe!');
    </script>";
    header("Refresh: 0, url=index.php");
    ?>
</body>

</html>