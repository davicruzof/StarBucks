<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>StarBucks</title>
    <?php require ('source/bootstrap.php') ?>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/brands.css" rel="stylesheet">
    <link href="css/solid.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="sortcut icon" href="images/icon.png" type="image/x-icon" />

</head>
<body>
<svg class="Caminho_22" viewBox="0 0 865 866">
    <path fill="rgba(211,229,203,0.431)" id="Caminho_22" d="M 432.5 0 C 671.3631591796875 0 865 193.8607177734375 865 433 C 865 672.1392822265625 671.3631591796875 866 432.5 866 C 193.6368560791016 866 0 672.1392822265625 0 433 C 0 193.8607177734375 193.6368560791016 0 432.5 0 Z">
    </path>
</svg>
<?php
    require ('source/View/header.php');
?>

    <section class="container">
        <div class="row">
            <div class="text-central col-lg-6 col-sm-12">
                <h1>The happiest hour <br> of the year</h1>
            </div>
            <ul class="text-central2 col-lg-6 nav menu align-items-end">
                <li class="nav-item-left">
                    <a href="">
                        Coffee & Tea
                    </a>
                </li>
                <li class="nav-item-left2">.</li>
                <li class="nav-item-left">
                    <a href="">
                        Whole Bean Coffee
                    </a>
                </li>
                <li class="nav-item-left2">.</li>
                <li class="nav-item-left">
                    <a href="#">
                        Blonde Roast
                    </a>
                </li>
                <li class="nav-item-left2">.</li>
                <li class="nav-item-left">
                    <a href="#">
                        Dark Roast
                    </a>
                </li>
            </ul>
        </div>
    </section>

     <section>
        <div class="carrossel-frame">
            <!-- Adicionar Itens aqui -->
        </div>
    </section>

    <script defer src="js/brands.js"></script>
    <script defer src="js/solid.js"></script>
    <script defer src="js/fontawesome.js"></script>
</body>
</html>