<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $titreHeader = 'Story';
    @require('include/_header.php');
    ?>
    <?php
    include('include/_nav.php');
    ?>
    <?php
    $paragraphe = 'toto toto toto toto toto toto ';
    include('include/_article.php');
    ?>
    <?php
    include('include/_footer.php');
    ?>
</body>
</html>