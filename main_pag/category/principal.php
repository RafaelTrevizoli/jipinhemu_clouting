<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/principal.css">
    <link rel="website icon" type="png" href="../../img/principalLogo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>JipinHemu - Hemu Número 1 Loja de Roupas</title>
</head>
<?php
$filename = '../data.json';

$data = json_decode(file_get_contents($filename), true);

$titulo1 = $data['texto1'] ?? "PRODUTO";
$subtitulo1 = $data['text1'] ?? "00,00";
$subtitulo2 = $data['text2'] ?? "00,00";

$titulo2 = $data['texto2'] ?? "PRODUTO";
$subtitulo3 = $data['text3'] ?? "00,00";
$subtitulo4 = $data['text4'] ?? "00,00";

$titulo3 = $data['texto3'] ?? "PRODUTO";
$subtitulo5 = $data['text5'] ?? "00,00";
$subtitulo6 = $data['text6'] ?? "00,00";

$titulo4 = $data['texto4'] ?? "PRODUTO";
$subtitulo7 = $data['text7'] ?? "00,00";
$subtitulo8 = $data['text8'] ?? "00,00";


$titulo5 = $data['texto1chapeu'] ?? "PRODUTO";
$subtitulo9 = $data['text1chapeu'] ?? "00,00";
$subtitulo10 = $data['text2chapeu'] ?? "00,00";

$titulo6 = $data['texto2chapeu'] ?? "PRODUTO";
$subtitulo11 = $data['text3chapeu'] ?? "00,00";
$subtitulo12 = $data['text4chapeu'] ?? "00,00";

$titulo7 = $data['texto3chapeu'] ?? "PRODUTO";
$subtitulo13 = $data['text5chapeu'] ?? "00,00";
$subtitulo14 = $data['text6chapeu'] ?? "00,00";

$titulo8 = $data['texto4chapeu'] ?? "PRODUTO";
$subtitulo15 = $data['text7chapeu'] ?? "00,00";
$subtitulo16 = $data['text8chapeu'] ?? "00,00";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['editar1'])) {
        $titulo1 = $_POST['texto1'];

        $data['texto1'] = $titulo1;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit1'])) {
        $subtitulo1 = $_POST['text1'];

        $data['text1'] = $subtitulo1;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit2'])) {
        $subtitulo2 = $_POST['text2'];

        $data['text2'] = $subtitulo2;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar2'])) {
        $titulo2 = $_POST['texto2'];

        $data['texto2'] = $titulo2;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit3'])) {
        $subtitulo3 = $_POST['text3'];

        $data['text3'] = $subtitulo3;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit4'])) {
        $subtitulo4 = $_POST['text4'];

        $data['text4'] = $subtitulo4;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar3'])) {
        $titulo3 = $_POST['texto3'];

        $data['texto3'] = $titulo3;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit5'])) {
        $subtitulo5 = $_POST['text5'];

        $data['text5'] = $subtitulo5;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit6'])) {
        $subtitulo6 = $_POST['text6'];

        $data['text6'] = $subtitulo6;
    }


    if (isset($_POST['editar4'])) {
        $titulo4 = $_POST['texto4'];

        $data['texto4'] = $titulo4;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit7'])) {
        $subtitulo7 = $_POST['text7'];

        $data['text'] = $subtitulo7;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit8'])) {
        $subtitulo8 = $_POST['text8'];

        $data['text8'] = $subtitulo8;
    }

}

if (isset($_POST['editar1chapeu'])) {
    $titulo5 = $_POST['texto1chapeu'];

    $data['texto1chapeu'] = $titulo5;
    file_put_contents($filename, json_encode($data));
}
if (isset($_POST['edit1chapeu'])) {
    $subtitulo9 = $_POST['text1chapeu'];

    $data['text1chapeu'] = $subtitulo9;
    file_put_contents($filename, json_encode($data));
}
if (isset($_POST['edit2chapeu'])) {
    $subtitulo10 = $_POST['text2chapeu'];

    $data['text2chapeu'] = $subtitulo10;
    file_put_contents($filename, json_encode($data));
}


if (isset($_POST['editar2chapeu'])) {
    $titulo6 = $_POST['texto2chapeu'];

    $data['texto2chapeu'] = $titulo6;
    file_put_contents($filename, json_encode($data));
}
if (isset($_POST['edit3chapeu'])) {
    $subtitulo11 = $_POST['text3chapeu'];

    $data['text3chapeu'] = $subtitulo11;
    file_put_contents($filename, json_encode($data));
}
if (isset($_POST['edit4chapeu'])) {
    $subtitulo12 = $_POST['text4chapeu'];

    $data['text4chapeu'] = $subtitulo12;
    file_put_contents($filename, json_encode($data));
}


if (isset($_POST['editar3chapeu'])) {
    $titulo7 = $_POST['texto3chapeu'];

    $data['texto3chapeu'] = $titulo7;
    file_put_contents($filename, json_encode($data));
}
if (isset($_POST['edit5chapeu'])) {
    $subtitulo13 = $_POST['text5chapeu'];

    $data['text5chapeu'] = $subtitulo13;
    file_put_contents($filename, json_encode($data));
}
if (isset($_POST['edit6chapeu'])) {
    $subtitulo14 = $_POST['text6chapeu'];

    $data['text6chapeu'] = $subtitulo14;
    file_put_contents($filename, json_encode($data));
}


if (isset($_POST['editar4chapeu'])) {
    $titulo8 = $_POST['texto4chapeu'];

    $data['texto4chapeu'] = $titulo8;
    file_put_contents($filename, json_encode($data));
}
if (isset($_POST['edit7chapeu'])) {
    $subtitulo15 = $_POST['text7chapeu'];

    $data['text7chapeu'] = $subtitulo15;
    file_put_contents($filename, json_encode($data));
}
if (isset($_POST['edit8chapeu'])) {
    $subtitulo16 = $_POST['text8chapeu'];

    $data['text8chapeu'] = $subtitulo16;
    file_put_contents($filename, json_encode($data));
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
        echo "<script>
        window.alert('Arquivo inválido! Selecione uma imagem! ');
        </script>";
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

if (isset($_POST['upload17'])) {
    $image8 = $_FILES['image17']['name'];
    $target = "img/" . basename($image8);

    if (move_uploaded_file($_FILES['image17']['tmp_name'], $target)) {
        $data['image17'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload18'])) {
    $image8 = $_FILES['image18']['name'];
    $target = "img/" . basename($image8);

    if (move_uploaded_file($_FILES['image18']['tmp_name'], $target)) {
        $data['image18'] = $target;
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

            <div class="container-header-2">
                <ul>
                    <li><img class="logo-header" src="../../img/principalLogo.png" width="400px"></li>
                </ul>
            </div>

            <div class="container-header-3">
                <div>
                    <input class="barra-pesquisa" type="text" id="txtbusca"
                        placeholder="    Oque você está procurando?">
                </div>

                <div class="container-header-4">
                    <a href="../../novo.php"><img src="../../img/caneta.png" class="icones-hover" width="30px" alt=""></a>
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
                <li><a href="#"><img class="icones-hover" src="../../img/caixaAberta.png" width="30px" alt=""></a><br>Todos
                    os produtos</li>
                <li><a href="colete_pag.php"><img class="icones-hover" src="../../img/colete.png"
                            width="30px" alt=""></a><br>Coletes</li>
                <li><a href="meia_pag.php"><img class="icones-hover" src="../../img/meias.png"
                            width="30px" alt=""></a><br>Meias</li>
                <li><a href="chapeu_pag.php"><img class="icones-hover" src="../../img/touca.png"
                            width="30px" alt=""></a><br>Chápeus</li>
                <li><a href="camisa_pag.php"><img class="icones-hover"
                            src="../../img/camiseta (1).png" width="30px" alt=""></a><br>Camisas</li>
            </ul>
        </div>
    </header>

    <main>

        <div id="offer">
            <h1>Corre!!! Todo o site com 50% off</h1>
            <div id="countdown">
                <span id="days">00</span>:
                <span id="hours">00</span>:
                <span id="minutes">00</span>:
                <span id="seconds">00</span>
            </div>
        </div>

        <div class="carrossel">
        <img src="<?php echo $data['image17']; ?>" alt="">
        <img src="<?php echo $data['image18']; ?>" alt="">
        <button class="anterior">Anterior</button>
        <button class="proximo">Próximo</button>
        </div>

        <h1 class="titulo-main">Aquela coleção especial</h1>
        <p class="subtitulo-main">ㅤㅤㅤConheça nossas camisetas mais vendidos!</p>

        <div class="geral">
            <div class="border-pvc">
                <ul><img src="<?php echo $data['image']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo1; ?>
                    </p>
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
                </form>
                <button class="button-comprar">COMPRE AQUI</button>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image2']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo2; ?>
                    </p>
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
                </form>
                <button class="button-comprar">COMPRE AQUI</button>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image3']; ?>" alt=""></ul>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo3; ?>
                    </p>
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
                </form>
                <button class="button-comprar">COMPRE AQUI</button>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image4']; ?>" alt=""></ul>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo4; ?>
                    </p>
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
                </form>
                <button class="button-comprar">COMPRE AQUI</button>
            </div>
        </div>

        <h1 class="titulo-main">Aquela coleção especial</h1>
        <p class="subtitulo-main">ㅤㅤㅤConheça nossos bonés mais vendidos!</p>

        <div class="geral">
            <div class="border-pvc">
                <ul><img src="<?php echo $data['image5']; ?>" alt=""></ul>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo5; ?>
                    </p>
                </form>
                <section><img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt=""><img src="../img/star (1).png" width="25px"
                        alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">(14)
                </section>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="texto-2">a partir de</p>
                    <p class="texto-4"><s class="texto-3">R$
                            <?php echo $subtitulo9; ?>
                        </s>R$
                        <?php echo $subtitulo10; ?>
                    </p>
                </form>
                <button class="button-comprar">COMPRE AQUI</button>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image6']; ?>" alt=""></ul>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo6; ?>
                    </p>
                </form>
                <section><img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt=""><img src="../img/star (1).png" width="25px"
                        alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">(5)
                </section>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="texto-2">a partir de</p>
                    <p class="texto-4"><s class="texto-3">R$
                            <?php echo $subtitulo11; ?>
                        </s>R$
                        <?php echo $subtitulo12; ?>
                    </p>
                </form>
                <button class="button-comprar">COMPRE AQUI</button>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image7']; ?>" alt=""></ul>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo7; ?>
                    </p>
                </form>
                <section><img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt=""><img src="../img/star (1).png" width="25px"
                        alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">(21)
                </section>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="texto-2">a partir de</p>
                    <p class="texto-4"><s class="texto-3">R$
                            <?php echo $subtitulo13; ?>
                        </s>R$
                        <?php echo $subtitulo14; ?>
                    </p>
                </form>
                <button class="button-comprar">COMPRE AQUI</button>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image8']; ?>" alt=""></ul>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo8; ?>
                    </p>
                </form>
                <section><img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">
                    <img src="../../img/star (1).png" width="25px" alt=""><img src="../img/star (1).png" width="25px"
                        alt="">
                    <img src="../../img/star (1).png" width="25px" alt="">(43)
                </section>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="texto-2">a partir de</p>
                    <p class="texto-4"><s class="texto-3">R$
                            <?php echo $subtitulo15; ?>
                        </s>R$
                        <?php echo $subtitulo16; ?>
                    </p>
                </form>
                <button class="button-comprar">COMPRE AQUI</button>
            </div>
        </div>
    </main>

    <script src="../../js/menu-responsivo.js"></script>
    <script src="../../js/relogio.js"></script>
    <script src="../../js/carrosel.js"></script>

</body>

</html>