<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $titreHeader = 'Home';
    @include('include/_header.php');
    ?>
    <?php
    @include('include/_nav.php');
    ?>
    <?php
    $paragraphe = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic, omnis molestias eaque minus neque suscipit harum dicta, ut praesentium vel minima doloribus maiores eius repellendus quod voluptates architecto odio aliquid?';
    include('include/_article.php');
    ?>
    <?php
    include('include/_footer.php');
    ?>
</body>
</html>