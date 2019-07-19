<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 4</title>
</head>

<body>
    <?php
    require_once "class/Cat.php";
    $cat1 = new Cat("Aldo", 2, "tabby", "male", "maine coon");
    $cat2 = new Cat("Bear", 7, "pointed", "male", "bengal");
    $cat3 = new Cat("Toby", 1, "shading", "female", "burmese");
    $cat4 = new Cat("Finn", 11, "tricolors", "male", "siberian");

    $cat1->getInfos();
    $cat2->getInfos();
    $cat3->getInfos();
    $cat4->getInfos();
    ?>
</body>

</html>