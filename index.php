<?php
//Import di products
require_once __DIR__ . '/Models/Products.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Css -->
    <link rel="stylesheet" href="style.css">
    <title>E-commerce</title>
</head>

<body>

    <!-- Lista Prodotti per Cani -->
    <h1>Lista dei prodotti per cani</h1>

    <!-- Lista elemento -->
    <ul>
        <?php foreach ($dogs as $dog) { $info = $dog->getInfo(); ?>
            <li>
                <img src="<?php echo $dog->img; ?>" alt="<?php echo $info['name']; ?>" width="150px">
                <p><strong>Nome:</strong> <?php echo $info['name']; ?></p>
                <p><strong>Categoria:</strong> <?php echo $info['category']; ?></p>
                <p><strong>Prezzo:</strong> <?php echo $info['price']; ?> €</p>
                <p><strong>Voto:</strong> <?php echo $info['vote']; ?>/10</p>
                <p><strong>Descrizione:</strong> <?php echo $info['description']; ?></p>
            </li>
        <?php } ?>
    </ul>

    <!-- Lista prodotti per Gatti -->
    <h1>Lista dei prodotti per Gatti</h1>

    <!-- Lista elemento -->
    <ul>
        <?php foreach ($cats as $cat) { $info = $cat->getInfo(); ?>
            <li>
                <img src="<?php echo $cat->img; ?>" alt="<?php echo $info['name']; ?>" width="150px">
                <p><strong>Nome:</strong> <?php echo $info['name']; ?></p>
                <p><strong>Categoria:</strong> <?php echo $info['category']; ?></p>
                <p><strong>Prezzo:</strong> <?php echo $info['price']; ?> €</p>
                <p><strong>Voto:</strong> <?php echo $info['vote']; ?>/10</p>
                <p><strong>Descrizione:</strong> <?php echo $info['description']; ?></p>
            </li>
        <?php } ?>
    </ul>
</body>

</html>