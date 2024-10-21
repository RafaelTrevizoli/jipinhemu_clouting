
<?php

$new = filter_input(INPUT_GET, 'new', FILTER_VALIDATE_INT);
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($dados['cadastrar'])):

    if (in_array("", $dados)) {
        echo "<h1>Todos os campos devem ser preenchidos!</h1>";
        header("Refresh: 2,  url=index.php");
        exit();
    }

    $dados['password'] = md5($dados['password']);
    unset($dados['cadastrar']);

    $arquivo = "user.json";

    if (file_exists($arquivo)) {
        $nome = $_POST['nome'];
        $arq = file_get_contents($arquivo);
        $arq = json_decode($arq, true);
        array_push($arq, $dados);

        $arq = json_encode($arq);
        if (file_put_contents($arquivo, $arq)) {
            echo "<script>
        window.alert('Olá $nome! Seu cadastro foi realizado com sucesso!\\nVocê será redirecionado a página Login');
        </script>";

        }
    } else {
        $dados = array($dados);
        $dados = json_encode($dados);
        if (file_put_contents($arquivo, $dados)) {
            echo "<script>
            window.alert('Olá $nome! Seu cadastro foi realizado com sucesso!\\nVocê será redirecionado a página Login');
            </script>";
        }
    }
endif;

?>