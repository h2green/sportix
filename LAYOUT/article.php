<?php
require_once 'backend/Articulo_controller.php';
require_once 'backend/includes/dbconn.inc.php';
$articles = showAllArticles($mysqli);
?>


<main>
    <?php foreach ($articles as $article) : ?>
        <div class="container-articulos">
            <a href="Articulo_view?id=<?= $article['id'] ?>">
                <article>
                    <img src='IMG/<?= $article["tipo"] ?>/<?= $article["imgFront"] ?>' alt="">
                    </article>
                <h2><?= $article['nombre'] ?></h2>
                <h3><?= $article['precio'] ?></h3>
            </a>
        </div>
    <?php endforeach; ?>
</main>