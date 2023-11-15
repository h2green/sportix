<?php 
require_once 'Articulo_model.php';

/**
 * Función que muestra un artículo específico.
 *
 * @param int $id El id del artículo a mostrar.
 * @return array|false|null
 */
function showArticle(mysqli $mysqli, int $id) {
    return getArticle($mysqli, $id);
}

/**
 * Función que muestra todos los artículos.
 *
 * @return array
 */
function showAllArticles(mysqli $mysqli) {
    return getAllArticles($mysqli);
}
?>