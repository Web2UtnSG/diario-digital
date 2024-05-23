

    <?php
    require 'layouts/header.html';
    require_once 'db_fake.php';
    $noticias = getNoticias();

  ?>
    <div class="noticias">
    <?php foreach ($noticias as $index => $noticia) 
    { ?>
        <div class="card">
            <img src="<?= $noticia->img ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $noticia->titulo ?></h5>
                <p class="card-text"><?= $noticia->contenido ?></p>
                <a href="noticia.php?id=<?= $index ?>" class="btn btn-primary">Leer más</a>
            </div>
        </div>
       
    <?php
    }
    ?>
 </div>
 <?php 
 require 'layouts/footer.html';
  



      