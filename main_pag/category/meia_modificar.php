<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/modificar-categoria.css">
    <link rel="website icon" type="png" href="../img/principalLogo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Jipin - Hemu Camisetas</title>
</head>

<?php
$filename = '../data.json';

$data = json_decode(file_get_contents($filename), true);

$titulo1 = $data['texto1meia'] ?? "PRODUTO";
$subtitulo1 = $data['text1meia'] ?? "00,00";
$subtitulo2 = $data['text2meia'] ?? "00,00";

$titulo2 = $data['texto2meia'] ?? "PRODUTO";
$subtitulo3 = $data['text3meia'] ?? "00,00";
$subtitulo4 = $data['text4meia'] ?? "00,00";

$titulo3 = $data['texto3meia'] ?? "PRODUTO";
$subtitulo5 = $data['text5meia'] ?? "00,00";
$subtitulo6 = $data['text6meia'] ?? "00,00";


$titulo4 = $data['texto4meia'] ?? "PRODUTO";
$subtitulo7 = $data['text7meia'] ?? "00,00";
$subtitulo8 = $data['text8meia'] ?? "00,00";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['editar1meia'])) {
        $titulo1 = $_POST['texto1meia'];

        $data['texto1meia'] = $titulo1;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit1meia'])) {
        $subtitulo1 = $_POST['text1meia'];

        $data['text1meia'] = $subtitulo1;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit2meia'])) {
        $subtitulo2 = $_POST['text2meia'];

        $data['text2meia'] = $subtitulo2;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar2meia'])) {
        $titulo2 = $_POST['texto2meia'];

        $data['texto2meia'] = $titulo2;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit3meia'])) {
        $subtitulo3 = $_POST['text3meia'];

        $data['text3meia'] = $subtitulo3;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit4meia'])) {
        $subtitulo4 = $_POST['text4meia'];

        $data['text4meia'] = $subtitulo4;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar3meia'])) {
        $titulo3 = $_POST['texto3meia'];

        $data['texto3meia'] = $titulo3;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit5meia'])) {
        $subtitulo5 = $_POST['text5meia'];

        $data['text5meia'] = $subtitulo5;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit6meia'])) {
        $subtitulo6 = $_POST['text6meia'];

        $data['text6meia'] = $subtitulo6;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar4meia'])) {
        $titulo4 = $_POST['texto4meia'];

        $data['texto4meia'] = $titulo4;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit7meia'])) {
        $subtitulo7 = $_POST['text7meia'];

        $data['text7meia'] = $subtitulo7;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit8meia'])) {
        $subtitulo8 = $_POST['text8meia'];

        $data['text8meia'] = $subtitulo8;
        file_put_contents($filename, json_encode($data));
    }

}

?>

<?php
$data = json_decode(file_get_contents('img.json'), true);

if (isset($_POST['upload9'])) {
    $image9 = $_FILES['image9']['name'];
    $target = "img/" . basename($image9);

    if (move_uploaded_file($_FILES['image9']['tmp_name'], $target)) {
        $data['image9'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}


if (isset($_POST['upload10'])) {
    $image10 = $_FILES['image10']['name'];
    $target = "img/" . basename($image10);

    if (move_uploaded_file($_FILES['image10']['tmp_name'], $target)) {
        $data['image10'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload11'])) {
    $image11 = $_FILES['image11']['name'];
    $target = "img/" . basename($image11);

    if (move_uploaded_file($_FILES['image11']['tmp_name'], $target)) {
        $data['image11'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload12'])) {
    $image12 = $_FILES['image12']['name'];
    $target = "img/" . basename($image12);

    if (move_uploaded_file($_FILES['image12']['tmp_name'], $target)) {
        $data['image12'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

?>

<body>
    <header>
        <nav>
            <div class="container-header-1">
                <ul class="lista-header-1">
                    <a href="">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="">
                        <i class='bx bxl-pinterest-alt'></i>
                    </a>
                    <a href="">
                        <i class='bx bxl-instagram'></i>
                    </a>
                </ul>

                <ul class="lista-header-2">
                    <img src="../img/envioCaminhao.png" height="28px" alt="">
                    <li>Frete grátis para todo Brasil! <y>saiba mais </y>ㅤ|
                    </li>
                    <img src="../img/carteira.png" height="28px" alt="">
                    <li>6x sem juros! <y>aproveite </y>ㅤ|
                    </li>
                    <img src="../img/maoSegurando.png" height="28px" alt="">
                    <li>Boleto 5% Off <y>ou pix </y>
                    </li>
                </ul>
            </div>

            <section>
                <ul class="lista-header-3">
                <a href="../../index.php">
                        <i class='bx bx-user'></i>
                    </a>
                </ul>
            </section>

            <div class="container-header-3">
                <div>
                    <input class="barra-pesquisa" type="text" id="txtbusca"
                        placeholder="    Oque você está procurando?">
                </div>

                <div class="container-header-4">
                    <a href=""><img src="../../img/cestinha.png" class="icones-hover" width="30px" alt=""></a>
                </div>
            </div>
        </nav>
        <div class="categorias-header">
            <section class="menu-1">
                <div class="menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar-text">MENU</span>
                </div>
            </section>
            <ul class="nav-menu">
                <li><a href="modificar.php"><img class="icones-hover" src="../../img/caixaAberta.png" width="30px"
                            alt=""></a><br>Todos osprodutos</li>
                <li><a href="colete_modificar.php"><img class="icones-hover" src="../../img/colete.png" width="30px"
                            alt=""></a><br>Coletes</li>
                <li><a href="meia_modificar.php"><img class="icones-hover" src="../../img/meias.png" width="30px"
                            alt=""></a><br>Meias</li>
                <li><a href="chapeu_modificar.php"><img class="icones-hover" src="../../img/touca.png" width="30px"
                            alt=""></a><br>Chápeus</li>
                <li><a href="camisa_modificar.php"><img class="icones-hover" src="../../img/camiseta (1).png"
                            width="30px" alt=""></a><br>Camisas</li>
            </ul>
        </div>
    </header>

    <main>

        <div class="container2-main">
            <h1>Meias <y class="y-1">Estampadas</y>
            </h1>
        </div>

        <div class="geral">
            <div class="border-pvc">
                <ul><img src="<?php echo $data['image9']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image9" accept="image/*">
                    <input type="submit" name="upload9" value="Substituir Imagem">
                </form>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo1; ?>
                    </p>
                    <input type="text" name="texto1meia" placeholder="Digite o novo texto">
                    <input type="submit" name="editar1meia" value="Editar Texto">
                </form>

                <section><img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">(2)
                </section>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="texto-2">a partir de</p>
                    <p class="texto-4"><s class="texto-3">R$
                            <?php echo $subtitulo1; ?>
                        </s>R$
                        <?php echo $subtitulo2; ?>
                    </p>
                    <input type="text" name="text1meia" placeholder="Digite o novo texto">
                    <input type="submit" name="edit1meia" value="Editar Texto">
                    <input type="text" name="text2meia" placeholder="Digite o novo texto">
                    <input type="submit" name="edit2meia" value="Editar Texto">
                </form>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image10']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image10" accept="image/*">
                    <input type="submit" name="upload10" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo2; ?>
                    </p>
                    <input type="text" name="texto2meia" placeholder="Digite o novo texto">
                    <input type="submit" name="editar2meia" value="Editar Texto">
                </form>
                <section><img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt=""><img src="../img/star (1).png" width="25px"
                        alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">(4)
                </section>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="texto-2">a partir de</p>
                    <p class="texto-4"><s class="texto-3">R$
                            <?php echo $subtitulo3; ?>
                        </s>R$
                        <?php echo $subtitulo4; ?>
                    </p>
                    <input type="text" name="text3meia" placeholder="Digite o novo texto">
                    <input type="submit" name="edit3meia" value="Editar Texto">
                    <input type="text" name="text4meia" placeholder="Digite o novo texto">
                    <input type="submit" name="edit4meia" value="Editar Texto">
                </form>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image11']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image11" accept="image/*">
                    <input type="submit" name="upload11" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo3; ?>
                    </p>
                    <input type="text" name="texto3meia" placeholder="Digite o novo texto">
                    <input type="submit" name="editar3meia" value="Editar Texto">
                </form>
                <section><img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt=""><img src="../img/star (1).png" width="25px"
                        alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">(22)
                </section>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="texto-2">a partir de</p>
                    <p class="texto-4"><s class="texto-3">R$
                            <?php echo $subtitulo5; ?>
                        </s>R$
                        <?php echo $subtitulo6; ?>
                    </p>
                    <input type="text" name="text5meia" placeholder="Digite o novo texto">
                    <input type="submit" name="edit5meia" value="Editar Texto">
                    <input type="text" name="text6meia" placeholder="Digite o novo texto">
                    <input type="submit" name="edit6meia" value="Editar Texto">
                </form>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image12']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image12" accept="image/*">
                    <input type="submit" name="upload12" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo4; ?>
                    </p>
                    <input type="text" name="texto4meia" placeholder="Digite o novo texto">
                    <input type="submit" name="editar4meia" value="Editar Texto">
                </form>
                <section><img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">(9)
                </section>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="texto-2">a partir de</p>
                    <p class="texto-4"><s class="texto-3">R$
                            <?php echo $subtitulo7; ?>
                        </s>R$
                        <?php echo $subtitulo8; ?>
                    </p>
                    <input type="text" name="text7meia" placeholder="Digite o novo texto">
                    <input type="submit" name="edit7meia" value="Editar Texto">
                    <input type="text" name="text8meia" placeholder="Digite o novo texto">
                    <input type="submit" name="edit8meia" value="Editar Texto">
                </form>
            </div>
        </div>

    </main>

    <script src="../../js/menu-responsivo.js"></script>
    <script src="../../js/relogio.js"></script>


</body>

</html>