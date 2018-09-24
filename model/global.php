<?php
session_start();
try{
    $pdo = new PDO('mysql:host=localhost;dbname=project_MVC', 'root', 'soleil1993');

} catch(PDOException $err){
    die('Erreur my sql ' . $err->getMessage());
}
