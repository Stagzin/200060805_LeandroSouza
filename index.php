<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/bootstrap.min.css" rel="stylesheet">
    <link href="./CSS/style.css" rel="stylesheet">
    <script defer src="./JS/bootstrap.min.js"></script>
    <title>Início</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg text-white" style="background-color: #28c7fa;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Página Microempreendedor</a>
        </div>
    </nav>

    <div style="width: 280px; position:fixed; z-index: 1000; left: 0; height: 100%; background-color: #a1eafb;">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link text-black" aria-current="page">
                    <img src="./Images/home-solid.svg" style="width: 2rem; height: 2rem;">
                    Início
                </a>
            </li>
            <li class="nav-item">
                <a href="./Pages/Contato.php" class="nav-link text-black">
                    <img src="./Images/address-card-solid.svg" style="width: 2rem; height: 2rem;">
                    Contato
                </a>
            </li>
            <li class="nav-item">
                <a href="./Pages/Localizacao.php" class="nav-link text-black">
                    <img src="./Images/map-marked-solid.svg" style="width: 2rem; height: 2rem;">
                    Localização
                </a>
            </li>
            <li class="nav-item">
                <a href="./Pages/QuemSomos.php" class="nav-link text-black">
                    <img src="./Images/comments-solid.svg" style="width: 2rem; height: 2rem;">
                    Quem Somos
                </a>
            </li>
        </ul>
    </div>

    <?php include './Dados/bolo.php' ?>
    <?php include './Pages/Home.php' ?>

    <nav class="navbar navbar-expand-lg text-white fixed-bottom" style="background-color: #28c7fa;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#"> &copy; Leandro Souza 20006080-5 . <?php echo date("Y") ?></a>
        </div>
    </nav>

</body>

</html>