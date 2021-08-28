<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <script defer src="../JS/bootstrap.min.js"></script>
    <title>Quem Somos</title>
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        align-items: center;
        text-align: center;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
        align-items: center;
        text-align: center;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
        align-items: center;
        text-align: center;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }

    .container {
        padding: 0 16px;
        align-items: center;
        text-align: center;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
</style>

<body>

    <?php include '../Dados/contato.php' ?>

    <div class="about-section" style="background-color: #28c7fa;">
        <h1>Quem Somos</h1>
    </div>

    <div class="row">
        <div class="column mx-auto">
            <div class="card mx-auto" style="align-self: center; display: grid;">
                <div class="container">
                    <h2><?php echo "$nome" ?></h2>
                    <p><?php echo "$desc" ?></p>
                    <p><?php echo "RA: $RA" ?></p>
                    <p><?php echo "Idade: $idade" ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>