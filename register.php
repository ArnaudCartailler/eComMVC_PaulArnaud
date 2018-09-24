<?php
require 'global.php';

if (isset($_POST['submit'])){
    echo 'submit: OK <br>';
    if (isset($_POST['email']) AND isset($_POST['pseudo']) AND isset($_POST['password'])){
        if (empty($_POST['email']) OR empty($_POST['pseudo']) OR empty($_POST['password'])){
            var_dump($_POST);
            echo 'Pierre SMB';
        }else{
            echo 'isset: ok<br>';
            if (strlen($_POST['email'])<= 255 AND strlen($_POST['pseudo'])<= 255 AND strlen($_POST['password'])<= 255){
                echo 'strelen: OK<br>';
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    echo 'Adresse email valide';

                    $req = $pdo->prepare('INSERT INTO users (mail, password, first_name, last_name) VALUES (:email, :password, :first_name, :last_name)');
                    $req->execute(array(
                        ':email' => $_POST['email'],
                        ':password' => sha1($_POST['password']),
                        ':first_name' => $_POST['pseudo'],
                        ':last_name' => $_POST['last_name']
                    ));
                    echo "Félictations, veuillez entrer vos id pour continuer.";
                    echo "<form action=\"#\" method=\"post\">
                                <button type=\"submit\" name=\"fdp\">Connexion</button>
                            </form>";

                }else{
                    echo 'Adresse non valide';
                }

            }else{
                //METTRE UNE INSTRUCTION ICI
            }

        }


    }else{
        //METTRE UNE INSTRUCTION ICI 
    }
}


if (isset($_POST['fdp'])){
    $testRegist = "<p>Veuillez entrer les id que vous venez de renseigner.</p>"; // ici je veux créer une variable à afficher sur l'index. Mais ça marche pas avec code de fdp
    header('location: index.php');
};






include 'html/content/register.html';