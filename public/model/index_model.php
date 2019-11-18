<?php
require('tools.php');

function getArticle(){
    $db = dbConnect();
    $queryArticle = $db->query('SELECT * FROM article');
    $result=  $queryArticle->fetchAll();
    return $result;
}

function deleteArticle($articleId =null){
    $db = dbConnect();
    $queryDelete = $db->prepare('DELETE FROM article WHERE id = ?');
    $queryDelete->execute(array($articleId));
    header('location:index.php');
    exit();
}

function exportArticle($articleId = null){
    $db = dbConnect();
    $today = date("Y-m-d H:i:s");
    $sth = $db->prepare("SELECT * FROM article WHERE id = ?");
    $sth->execute(array($articleId));
    $csv = \League\Csv\Writer::createFromFileObject(new SplTempFileObject());
    $csv->insertOne(['Article']);
    $csv->insertAll($sth);
    $csv->output('article' . $today . '.csv');
    die;
}
