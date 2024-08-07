<?php
include('_config.php');
// Calcul du Total à payer
$total = $_POST['quantite'] * TARIF;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Merci pour votre commande</h1>
        <ul>
            <li>Nombre de boîtes commandées: <?= $_POST['quantite']; ?></li>
            <li>Tarif unitaire: <?= TARIF; ?> euros</li>
            <li>Total à payer: <?= $total; ?> euros</li>
            <li>Remise: <?= REMISE; ?> euros</li>
            <li><strong>Nouveau Total:</strong> euros</li>
        </ul>
    </div>
</body>
</html>