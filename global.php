<?php

session_start();
try{
    $pdo = new PDO('mysql:host=localhost;dbname=eCommerce', 'root', 'soleil1993');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch(PDOException $err){
    die('Erreur my sql ' . $err->getMessage());
}



// en dessous: à enlever quand sql est mis en place
$products = [
    [
        "name" => "FILA DISRUPTOR",
        "picture" => "img/fila.jpg",
        "description" => "Back to 90's",
        "size" => "36 - 38 - 40 - 42",
        "price" => "120 €"
    ],
    [
        "name" => "NIKE M2KTEKNO",
        "picture" => "img/nike.jpg",
        "description" => "Obsession Dad Shoes !",
        "size" => "38 - 40 - 42",
        "price" => "120 €"
    ],
    [
        "name" => "VANS OLD SKOOL",
        "picture" => "img/vans.jpg",
        "description" => "Old Skool : une histoire de Sidestrip !",
        "size" => "36 - 38 - 40 - 42",
        "price" => "75 €"
    ],
    [
        "name" => "REEBOK WORKOUT PLUS",
        "picture" => "img/reebok.jpg",
        "description" => "Workout Plus : la star des 90's !",
        "size" => "40 - 42",
        "price" => "90 €"
    ]
];
