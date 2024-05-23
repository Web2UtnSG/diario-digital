<?php
require 'layouts/header.html';
require_once 'db_fake.php';

$devs = getDevelopers();
$devSeleccionado = getDeveloperById($_GET['id'] ?? null);

?>

<h1>Aqui van los desarrolladores</h1>
<main class="mt-5">
    <div class="row">
        <div class="col">
            <ul class="list-group">
                <?php foreach ($devs as $dev) { ?>
                    <li class="list-group-item"><a href="about.php?id=<?= $dev->id ?>"><?= $dev->nombre ?></a></li>
                <?php } ?>

            </ul>
        </div>
        <div class="col">
            <?php if(isset($devSeleccionado)) { ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $devSeleccionado->nombre ?></h5>
                    <p class="card-text"><?= $devSeleccionado->email ?></p>
                    <p class="card-text"><?= $devSeleccionado->role ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>


<?php
require 'layouts/footer.html';
