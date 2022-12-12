<!-- 
    CONSEGNA:
    - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
    - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
    - Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). 
-->

<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Categoria.php";
require_once __DIR__ . "/Models/Cibo.php";
require_once __DIR__ . "/Models/Gioco.php";
require_once __DIR__ . "/Models/Cuccia.php";


$prod = [
    new Cibo("Royal Canin Urinary S/O Crocchette", "https://www.farmapets.it/2420-large_default/royal-canin-urinary-so-crocchette.jpg", new Categoria("Cane"), 20.00, "crocchette", 2000, "12-12-22", "sei mesi", "proteine"),
    new Gioco("KONG Gatto Connects Bat 'n Spring", "https://arcaplanet.vtexassets.com/arquivos/ids/223733/kong-gatto-connects-bat-n-spring.jpg?v=1757238203", new Categoria("Gatto"), 11.05, "KONG ideale per stimolare la curiosità del gatto."),
    new Cuccia("Cuccia Amaca per Calorifero", "https://arcaplanet.vtexassets.com/arquivos/ids/209724/YES--Cuccia-per-gatti-da-calorifero-Jane.jpg?v=1757251397", new Categoria("Gatto"), 12.60, "marrone", 48),
];

// var_dump($prod);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Prodotti Per Animali</title>
</head>

<body>

    <main>
        <div class="container">
            <div class="row mt-5">
                <h1 class="mb-5">I nostri prodotti:</h1>
                <?php foreach ($prod as $prodotto) { ?>
                    <div class="col-3">
                        <div class="card border-dark" style="max-width: 15rem;">
                            <img src="<?php echo $prodotto->poster; ?>" alt="">
                            <div class="card-body text-dark">
                                <h5 class="card-title"> <?php echo $prodotto->getNome(); ?></h5>
                                <p class="card-text">Prezzo: <?php echo $prodotto->getPrezzo(); ?>€</p>
                                <p class="card-text">Categoria: <?php echo $prodotto->categoria->categoria; ?></p>
                                <p>Tipo prodotto:</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

    </main>
</body>

</html>