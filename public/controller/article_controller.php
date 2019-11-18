<?php
require_once('./model/article_model.php');

if (isset($_GET['method'])) {
    if ($_GET['method'] == "faker") {
        generateArticle();
    } else {
        if (isset($_POST['add'])) {
            createArticle();
        }elseif (isset($_POST['update'])){
            updateArticle();
        }
    }
}elseif (isset($_GET['article_id'])){
    $articleInfo = getArticleById($_GET['article_id']);
}

require_once('./view/article_view.php');
