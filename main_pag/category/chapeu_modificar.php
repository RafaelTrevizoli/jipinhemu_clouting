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

$titulo1 = $data['texto1chapeu'] ?? "PRODUTO";
$subtitulo1 = $data['text1chapeu'] ?? "00,00";
$subtitulo2 = $data['text2chapeu'] ?? "00,00";

$titulo2 = $data['texto2chapeu'] ?? "PRODUTO";
$subtitulo3 = $data['text3chapeu'] ?? "00,00";
$subtitulo4 = $data['text4chapeu'] ?? "00,00";

$titulo3 = $data['texto3chapeu'] ?? "PRODUTO";
$subtitulo5 = $data['text5chapeu'] ?? "00,00";
$subtitulo6 = $data['text6chapeu'] ?? "00,00";

$titulo4 = $data['texto4chapeu'] ?? "PRODUTO";
$subtitulo7 = $data['text7chapeu'] ?? "00,00";
$subtitulo8 = $data['text8chapeu'] ?? "00,00";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['editar1chapeu'])) {
        $titulo1 = $_POST['texto1chapeu'];

        $data['texto1chapeu'] = $titulo1;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit1chapeu'])) {
        $subtitulo1 = $_POST['text1chapeu'];

        $data['text1chapeu'] = $subtitulo1;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit2chapeu'])) {
        $subtitulo2 = $_POST['text2chapeu'];

        $data['text2chapeu'] = $subtitulo2;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar2chapeu'])) {
        $titulo2 = $_POST['texto2chapeu'];

        $data['texto2chapeu'] = $titulo2;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit3chapeu'])) {
        $subtitulo3 = $_POST['text3chapeu'];

        $data['text3chapeu'] = $subtitulo3;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit4chapeu'])) {
        $subtitulo4 = $_POST['text4chapeu'];

        $data['text4chapeu'] = $subtitulo4;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar3chapeu'])) {
        $titulo3 = $_POST['texto3chapeu'];

        $data['texto3chapeu'] = $titulo3;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit5chapeu'])) {
        $subtitulo5 = $_POST['text5chapeu'];

        $data['text5chapeu'] = $subtitulo5;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit6chapeu'])) {
        $subtitulo6 = $_POST['text6chapeu'];

        $data['text6chapeu'] = $subtitulo6;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar4chapeu'])) {
        $titulo4 = $_POST['texto4chapeu'];

        $data['texto4chapeu'] = $titulo4;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit7chapeu'])) {
        $subtitulo7 = $_POST['text7chapeu'];

        $data['text7chapeu'] = $subtitulo7;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit8chapeu'])) {
        $subtitulo8 = $_POST['text8chapeu'];

        $data['text8chapeu'] = $subtitulo8;
        file_put_contents($filename, json_encode($data));
    }

}

?>

<?php
$data = json_decode(file_get_contents('img.json'), true);

if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $target = "img/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $data['image'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}


if (isset($_POST['upload2'])) {
    $image2 = $_FILES['image2']['name'];
    $target = "img/" . basename($image2);

    if (move_uploaded_file($_FILES['image2']['tmp_name'], $target)) {
        $data['image2'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload3'])) {
    $image3 = $_FILES['image3']['name'];
    $target = "img/" . basename($image3);

    if (move_uploaded_file($_FILES['image3']['tmp_name'], $target)) {
        $data['image3'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload4'])) {
    $image4 = $_FILES['image4']['name'];
    $target = "img/" . basename($image4);

    if (move_uploaded_file($_FILES['image4']['tmp_name'], $target)) {
        $data['image4'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload5'])) {
    $image5 = $_FILES['image5']['name'];
    $target = "img/" . basename($image5);

    if (move_uploaded_file($_FILES['image5']['tmp_name'], $target)) {
        $data['image5'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload6'])) {
    $image6 = $_FILES['image6']['name'];
    $target = "img/" . basename($image6);

    if (move_uploaded_file($_FILES['image6']['tmp_name'], $target)) {
        $data['image6'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload7'])) {
    $image7 = $_FILES['image7']['name'];
    $target = "img/" . basename($image7);

    if (move_uploaded_file($_FILES['image7']['tmp_name'], $target)) {
        $data['image7'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload8'])) {
    $image8 = $_FILES['image8']['name'];
    $target = "img/" . basename($image8);

    if (move_uploaded_file($_FILES['image8']['tmp_name'], $target)) {
        $data['image8'] = $target;
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
            <h1>Bonés <y class="y-1">Estampados</y>
            </h1>
        </div>

        <div class="geral">
            <div class="border-pvc">
                <ul><img src="<?php echo $data['image5']; ?>" width="270px" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image5" accept="image/*">
                    <input type="submit" name="upload5" value="Substituir Imagem">
                </form>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo1; ?>
                    </p>
                    <input type="text" name="texto1chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="editar1chapeu" value="Editar Texto">
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
                    <input type="text" name="text1chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="edit1chapeu" value="Editar Texto">
                    <input type="text" name="text2chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="edit2chapeu" value="Editar Texto">
                </form>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image6']; ?>" width="270px" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image6" accept="image/*">
                    <input type="submit" name="upload6" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo2; ?>
                    </p>
                    <input type="text" name="texto2chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="editar2chapeu" value="Editar Texto">
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
                    <input type="text" name="text3chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="edit3chapeu" value="Editar Texto">
                    <input type="text" name="text4chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="edit4chapeu" value="Editar Texto">
                </form>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image7']; ?>" width="270px" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image7" accept="image/*">
                    <input type="submit" name="upload7" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo3; ?>
                    </p>
                    <input type="text" name="texto3chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="editar3chapeu" value="Editar Texto">
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
                    <input type="text" name="text5chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="edit5chapeu" value="Editar Texto">
                    <input type="text" name="text6chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="edit6chapeu" value="Editar Texto">
                </form>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image8']; ?>" width="270px" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image8" accept="image/*">
                    <input type="submit" name="upload8" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo4; ?>
                    </p>
                    <input type="text" name="texto4chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="editar4chapeu" value="Editar Texto">
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
                    <input type="text" name="text7chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="edit7chapeu" value="Editar Texto">
                    <input type="text" name="text8chapeu" placeholder="Digite o novo texto">
                    <input type="submit" name="edit8chapeu" value="Editar Texto">
                </form>
            </div>
        </div>

    </main>
    <script src="../../js/menu-responsivo.js"></script>
    <script src="../../js/relogio.js"></script>


</body>

</html>