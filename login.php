<?php

require 'global.php';

include 'html/boiler/startbp.html';

include 'html/content/menu.html';

if (isset($_POST['submit'])){
    $password = sha1($_POST['password']);
    $email = $_POST['email'];
    
    if (empty($password) OR empty($email)) {
        echo 'Veuillez entrer un mot de passe et un id';

    }else{
        $req = $pdo->query('SELECT id, password, first_name, last_name, admin FROM users WHERE mail = "'.$email.'"');
        $emailCount = $req->rowCount();
        if ($emailCount == 0){
            echo "Cette adresse mail n'est pas enregistrée";

        }else{
            $user = $req->fetch();

            if ($user->password == $password){
                $_SESSION['pseudo'] = $user->first_name;
                $_SESSION['last_name'] = $user->last_name;

                header('Location: index.php');
            }
        }

    }
}

include 'html/content/login.html';

include 'html/content/footer.html';

include 'html/boiler/endbp.html';
