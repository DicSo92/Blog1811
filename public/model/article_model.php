<?php
require('tools.php');


function generateArticle(){
    $db = dbConnect();
    $faker = Faker\Factory::create('fr_FR');
    $title = $faker->catchPhrase;
    $content = $faker->text;
    $auteur = $faker->name;
    $reqPrep = $db->prepare('INSERT INTO article(id, auteur, contenu, date, title) VALUES (default, ? ,? ,NOW(), ?)');
    $reqPrep-> execute(array($auteur, $content, $title));
    header('location:index.php');
    exit();
}

function createArticle(){
    $db = dbConnect();
    $reqPrep = $db->prepare("INSERT INTO article (id, auteur, contenu,date, title) VALUES (default,?,?,NOW(),?)");
    $reqPrep->execute(array($_POST['author'], $_POST['content'],$_POST['title']));
    header('location:index.php');
    exit();
}

function updateArticle(){
    $db = dbConnect();
    $reqPrep = $db->prepare("UPDATE article SET auteur =? , contenu=?, title=? where id=?");
    $reqPrep->execute(array($_POST['author'], $_POST['content'],$_POST['title'],$_POST['id']));
}

function getArticleById($article_id = null){
    $db = dbConnect();
    $reqPrep = $db->prepare('SELECT * FROM article WHERE id=?');
   $reqPrep->execute(array($article_id));
   return $reqPrep->fetch();
}
