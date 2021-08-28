<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <script defer src="../JS/bootstrap.min.js"></script>
    <title>Home</title>
</head>

<body>
    <div class="container grid" style="padding: 0.5rem;">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./Images/bolo1.jpg" class="card-img-top" alt="Bolo de Morango">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "$nomeBolo" ?></h5>
                        <p class="card-text"><?php echo "$descBolo" ?></p>
                        <a href="./Pages/Produto.php" class="btn" style="background-color: #a1eafb; outline-color: white;">Mais Informações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>