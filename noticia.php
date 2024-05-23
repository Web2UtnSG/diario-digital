
    <?php
    require 'layouts/header.html';
    require_once 'db_fake.php';

    $noticia = getNoticiaById($_GET['id'] ?? null)

    ?>

        <h1><?= $noticia->titulo ?></h1>
        <p><?= $noticia->contenido ?></p>
        <img src="<?= $noticia->img ?>" alt="">
  



    <?php 
     require 'layouts/footer.html';