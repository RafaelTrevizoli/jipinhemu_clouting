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

$titulo1 = $data['texto1colete'] ?? "PRODUTO";
$subtitulo1 = $data['text1colete'] ?? "00,00";
$subtitulo2 = $data['text2colete'] ?? "00,00";

$titulo2 = $data['texto2colete'] ?? "PRODUTO";
$subtitulo3 = $data['text3colete'] ?? "00,00";
$subtitulo4 = $data['text4colete'] ?? "00,00";

$titulo3 = $data['texto3colete'] ?? "PRODUTO";
$subtitulo5 = $data['text5colete'] ?? "00,00";
$subtitulo6 = $data['text6colete'] ?? "00,00";


$titulo4 = $data['texto4colete'] ?? "PRODUTO";
$subtitulo7 = $data['text7colete'] ?? "00,00";
$subtitulo8 = $data['text8colete'] ?? "00,00";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['editar1colete'])) {
        $titulo1 = $_POST['texto1colete'];

        $data['texto1colete'] = $titulo1;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit1colete'])) {
        $subtitulo1 = $_POST['text1colete'];

        $data['text1colete'] = $subtitulo1;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit2colete'])) {
        $subtitulo2 = $_POST['text2colete'];

        $data['text2colete'] = $subtitulo2;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar2colete'])) {
        $titulo2 = $_POST['texto2colete'];

        $data['texto2colete'] = $titulo2;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit3colete'])) {
        $subtitulo3 = $_POST['text3colete'];

        $data['text3colete'] = $subtitulo3;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit4colete'])) {
        $subtitulo4 = $_POST['text4colete'];

        $data['text4colete'] = $subtitulo4;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar3colete'])) {
        $titulo3 = $_POST['texto3colete'];

        $data['texto3colete'] = $titulo3;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit5colete'])) {
        $subtitulo5 = $_POST['text5colete'];

        $data['text5colete'] = $subtitulo5;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit6colete'])) {
        $subtitulo6 = $_POST['text6colete'];

        $data['text6colete'] = $subtitulo6;
        file_put_contents($filename, json_encode($data));
    }


    if (isset($_POST['editar4colete'])) {
        $titulo4 = $_POST['texto4colete'];

        $data['texto4colete'] = $titulo4;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit7colete'])) {
        $subtitulo7 = $_POST['text7colete'];

        $data['text7colete'] = $subtitulo7;
        file_put_contents($filename, json_encode($data));
    }
    if (isset($_POST['edit8colete'])) {
        $subtitulo8 = $_POST['text8colete'];

        $data['text8colete'] = $subtitulo8;
        file_put_contents($filename, json_encode($data));
    }

}
?>

<?php
$data = json_decode(file_get_contents('img.json'), true);

if (isset($_POST['upload13'])) {
    $image13 = $_FILES['image13']['name'];
    $target = "img/" . basename($image13);

    if (move_uploaded_file($_FILES['image13']['tmp_name'], $target)) {
        $data['image13'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}


if (isset($_POST['upload14'])) {
    $image14 = $_FILES['image14']['name'];
    $target = "img/" . basename($image14);

    if (move_uploaded_file($_FILES['image14']['tmp_name'], $target)) {
        $data['image14'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload15'])) {
    $image15 = $_FILES['image15']['name'];
    $target = "img/" . basename($image15);

    if (move_uploaded_file($_FILES['image15']['tmp_name'], $target)) {
        $data['image15'] = $target;
        file_put_contents('img.json', json_encode($data));
    } else {
    }
}

if (isset($_POST['upload16'])) {
    $image16 = $_FILES['image16']['name'];
    $target = "img/" . basename($image16);

    if (move_uploaded_file($_FILES['image16']['tmp_name'], $target)) {
        $data['image16'] = $target;
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
            <h1>Jaquetas <y class="y-1">Estampadas</y>
            </h1>
        </div>

        <div class="geral">
            <div class="border-pvc">
                <ul><img src="<?php echo $data['image13']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image13" accept="image/*">
                    <input type="submit" name="upload13" value="Substituir Imagem">
                </form>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo1; ?>
                    </p>
                    <input type="text" name="texto1colete" placeholder="Digite o novo texto">
                    <input type="submit" name="editar1colete" value="Editar Texto">
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
                    <p class="texto-4"><s class="texto-3">R$ <?php echo $subtitulo1; ?></s>R$<?php echo $subtitulo2; ?></p>
                    <input type="text" name="text1colete" placeholder="Digite o novo texto">
                    <input type="submit" name="edit1colete" value="Editar Texto">
                    <input type="text" name="text2colete" placeholder="Digite o novo texto">
                    <input type="submit" name="edit2colete" value="Editar Texto">
                </form>

            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image14']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image14" accept="image/*">
                    <input type="submit" name="upload14" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo2; ?>
                    </p>
                    <input type="text" name="texto2colete" placeholder="Digite o novo texto">
                    <input type="submit" name="editar2colete" value="Editar Texto">
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
                    <input type="text" name="text3colete" placeholder="Digite o novo texto">
                    <input type="submit" name="edit3colete" value="Editar Texto">
                    <input type="text" name="text4colete" placeholder="Digite o novo texto">
                    <input type="submit" name="edit4colete" value="Editar Texto">
                </form>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image15']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image15" accept="image/*">
                    <input type="submit" name="upload15" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo3; ?>
                    </p>
                    <input type="text" name="texto3colete" placeholder="Digite o novo texto">
                    <input type="submit" name="editar3colete" value="Editar Texto">
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
                    <input type="text" name="text5colete" placeholder="Digite o novo texto">
                    <input type="submit" name="edit5colete" value="Editar Texto">
                    <input type="text" name="text6colete" placeholder="Digite o novo texto">
                    <input type="submit" name="edit6colete" value="Editar Texto">
                </form>
            </div>

            <div class="border-pvc">
                <ul><img src="<?php echo $data['image16']; ?>" alt=""></ul>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input type="file" name="image16" accept="image/*">
                    <input type="submit" name="upload16" value="Substituir Imagem">
                </form>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p class="text-1">
                        <?php echo $titulo4; ?>
                    </p>
                    <input type="text" name="texto4colete" placeholder="Digite o novo texto">
                    <input type="submit" name="editar4colete" value="Editar Texto">
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
                    <input type="text" name="text7colete" placeholder="Digite o novo texto">
                    <input type="submit" name="edit7colete" value="Editar Texto">
                    <input type="text" name="text8colete" placeholder="Digite o novo texto">
                    <input type="submit" name="edit8colete" value="Editar Texto">
                </form>
            </div>
        </div>

    </main>

    <script src="../../js/menu-responsivo.js"></script>
    <script src="../../js/relogio.js"></script>


</body>

</html>