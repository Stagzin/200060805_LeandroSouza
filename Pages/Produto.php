<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <script defer src="../JS/bootstrap.min.js"></script>
    <title>Produto</title>
</head>

<style>
    html,
    body {
        height: 100%;
        width: 100%;
        margin: 0;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px;
        display: flex;
    }

    .left-column {
        width: 65%;
        position: relative;
    }

    .right-column {
        width: 35%;
        margin-top: 60px;
    }

    .product-description {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .product-description span {
        font-size: 12px;
        color: #358ED7;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .product-description h1 {
        font-weight: 300;
        font-size: 52px;
        color: #43484D;
        letter-spacing: -2px;
    }

    .product-description p {
        font-size: 16px;
        font-weight: 300;
        color: #86939E;
        line-height: 24px;
    }

    .product-price {
        display: flex;
        align-items: center;
    }

    .product-price span {
        font-size: 26px;
        font-weight: 300;
        color: #43474D;
        margin-right: 20px;
    }

    .cart-btn {
        display: inline-block;
        background-color: #7DC855;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
    }

    .cart-btn:hover {
        background-color: #64af3d;
    }
</style>

<body>

    <?php include '../Dados/bolo.php' ?>

    <nav class="navbar navbar-expand-lg text-white" style="background-color: #28c7fa;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" style="text-align: center;" href="#"></a>
        </div>
    </nav>


    <main class="container">

        <div class="left-column">
            <img src="../Images/bolo2.jpg" alt="">
        </div>

        <div class="right-column">

            <div class="product-description">
                <h1><?php echo "$nomeBolo" ?></h1>
                <p><?php echo "$descBolo" ?></p>
            </div>

            <div class="product-price">
                <span>R$140</span>
                <a href="#" class="cart-btn">Comprar</a>
            </div>
        </div>
    </main>

    <nav class="navbar navbar-expand-lg text-white fixed-bottom" style="background-color: #28c7fa;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#"> &copy; Leandro Souza 20006080-5 . <?php echo date("Y") ?></a>
        </div>
    </nav>

</body>

</html>