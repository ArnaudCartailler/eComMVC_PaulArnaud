<?php

$req = $pdo->query('SELECT * FROM articles');
      $data = $req->fetchAll();

?>


<div class="container text-center">

    <h1> <?php echo $data[$_GET['index']]['name'] ?> </h1>

    <img src="public/<?php echo $data[$_GET['index']]['picture'] ?>" alt="Photo du produit">

    <p>
        <strong>Prix</strong><br /> <?php echo $data[$_GET['index']]['price'] ?> Euros
    </p>

    <p>
        <strong>Description:</strong><br>
        <?php echo $data[$_GET['index']]['description'] ?><br>
    </p>
    <p>
        <strong>Tailles disponibles:</strong><br>
        <?php echo $data[$_GET['index']]['size'] ?>
    </p>
</div>
