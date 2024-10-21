<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JipinHemu - Painel Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <?php

    $new = filter_input(INPUT_GET, 'new', FILTER_VALIDATE_INT);
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (isset($dados['cadastrar'])):

        if (in_array("", $dados)) {
            echo "<script>
            window.alert('Todos os campos devem ser preenchidos!\\nVocê será redirecionado a página Login');
            </script>";
            header("Refresh: 0,  url=index.php");
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

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Seja muito bem vindo!</h2>
                <p class="description description-primary">Para se manter conectado conosco</p>
                <p class="description description-primary">Por favor faça login com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">sign in</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Crie sua conta:</h2>

                <form class="form" aaction="validacaologin.php" method="post"
                    enctype="multipart/form-data">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" id="nome" placeholder="Name">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="login" id="login" placeholder="Login">

                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </label>

                    <label class="label-input" for="nivel" class="form-label"></label>
                    <select class="label-input2" name="nivel" id="nivel" class="form-input">
                        <option value="0" selected disabled>Selecione um nível de usuário </option>
                        <option value="admin"> Admin </option>
                        <option value="usuario"> Usuário </option>
                    </select>

                    <input class="btn btn-second" type="submit" value="Cadastar" name="cadastrar" class="btn">
                </form>
            </div>
        </div>
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, amigo!</h2>
                <p class="description description-primary"> Insira seus dados pessoais</p>
                <p class="description description-primary"> e comece a jornada conosco</p>
                <button id="signup" class="btn btn-primary">sign up</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">faça Seu login!</h2>
                <form class="form" action="verificacao.php" method="post" enctype="multipart/form-data">

                    <form action="" method="post" enctype="multipart/form-data">
                        <label class="label-input" for="">
                            <i class="far fa-envelope icon-modify"></i>
                            <input type="email" name="login" id="login" placeholder="Email">
                        </label>

                        <label class="label-input" for="">
                            <i class="fas fa-lock icon-modify"></i>
                            <input type="password" name="password" id="password" placeholder="Password">
                        </label>

                        <a class="password" href="#">Esqueceu sua senha?</a>

                        <input class="btn btn-second" type="submit" value="Logar" name="logar" id="logar">
                    </form>
            </div>
        </div>
    </div>
  <script src="js/login.js"></script>

</body>

</html>