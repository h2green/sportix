<?php
function getArticle(mysqli $mysqli, int $id) {
    $query = "SELECT * FROM productos WHERE id = ?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $article = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $article;
}

function getAllArticles(mysqli $mysqli) {
    $query = "SELECT * FROM productos";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_stmt_close($stmt);
    return $articles;
}
?>