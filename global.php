<?php
session_start();
try{
    $pdo = new PDO('mysql:host=localhost;dbname=E-com_Sofian_Peter', 'root', 'yeswewebPaul');
  
} catch(PDOException $err){
    die('Erreur my sql ' . $err->getMessage());
}
