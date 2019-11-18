<?php
$Parsedown = new Parsedown();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> - Mon premier blog !</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.1/jquery.fancybox.min.js"></script>
</head>
<body class="article-list-body">
<div class="container-fluid">
    <div class="row my-3 article-list-content">
        <nav class="col-3 py-2 categories-nav">
            <a class="d-block btn btn-primary mb-4 mt-2" href="?page=new_article&method=faker">Générer un article</a>
            <a class="d-block btn btn-primary mb-4 mt-2" href="?page=new_article">Créer un article</a>
            <a class="d-block btn btn-primary mb-4 mt-2" href="?page=contact">Contact</a>
        </nav>
        <main class="col-9">
            <section class="all_articles">
                <header>
                    <h1 class="mb-4">Tous les articles :</h1>
                </header>

                <?php if (count($articles) > 0): ?>
                    <?php foreach ($articles as $key => $article): ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <?php echo $Parsedown->text("##".$article['title'])?>
                            </div>
                            <div class="card-body px-3">
                                <p class="card-text"><?php echo $Parsedown->text($article['contenu'])?></p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p class="m-0">
                                    <?php $datetime = Carbon::createFromFormat('Y-m-d H:i:s', $article['date']);
                                    echo $datetime->diffForHumans();?>
                                </p>
                                <div class="d-flex">
                                    <a class="btn btn-success px-2 py-1 mr-1" href="?page=new_article&article_id=<?php echo $article['id']; ?>">Modifier</a>
                                    <a class="btn btn-warning px-2 py-1 mr-1" href="?state=export&article_id=<?php echo $article['id']; ?>">Exporter</a>
                                    <a class="btn btn-danger px-2 py-1 mr-1" href="?state=delete&article_id=<?php echo $article['id']; ?>">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <?php echo $Parsedown->text("aucuns articles")?>
                <?php endif; ?>
            </section>
        </main>
    </div>
</div>
</body>
</html>


