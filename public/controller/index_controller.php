<?php
require_once ('./model/index_model.php');

$articles = getArticle();

if (isset($_GET['state'])){
    if($_GET['state']=="delete"){
        deleteArticle($_GET['article_id']);
    }elseif ($_GET['state']=="export"){
            exportArticle($_GET['article_id']  );
    }
}

require_once('./view/index.php');
