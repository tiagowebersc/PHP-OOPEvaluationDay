<?php
$errors = [];
$success = "";
if (!empty($_POST)) {

    // Basics validations
    if (empty($_POST['brand'])) $errors[count($errors)] = 'Brand is mandatory';
    if (empty($_POST['model'])) $errors[count($errors)] = 'Model is mandatory';
    if (empty($_POST['year'])) $errors[count($errors)] = 'Year is mandatory';
    if (empty($_POST['color'])) $errors[count($errors)] = 'Color is mandatory';

    if (count($errors) === 0) {
        $pdo = new PDO('mysql:host=localhost;dbname=Exercise3', 'root', '');

        $query = 'INSERT INTO cars (brand, model, year, color) VALUES (?, ?, ?, ?)';
        $insert = $pdo->prepare($query);
        $insert->bindValue(1, $_POST['brand']);
        $insert->bindValue(2, $_POST['model']);
        $insert->bindValue(3, $_POST['year']);
        $insert->bindValue(4, $_POST['color']);
        if ($insert->execute()) {
            $success = 'Car successfully added!';
        } else {
            $errors[count($errors)] = 'Erro inserting into the DB!';
        }
    }

    $result = "success=" . $success . ";error=" . implode('<br>', $errors);
    echo $result;
}
