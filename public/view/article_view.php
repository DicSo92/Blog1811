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
<body class="index-body">
<div class="container-fluid">



    <div class="row my-3 index-content">

        <nav class="col-3 py-2 categories-nav">
            <a class="d-block btn btn-primary mb-4 mt-2" href="index.php">Retour</a>
        </nav>
        <section class="col-9">
            <header class="pb-3">
                <!-- Si $article existe, on affiche "Modifier" SINON on affiche "Ajouter" -->
                <?php if (isset($_GET['article_id'])):?>
                    <h4>Modifier un article</h4>
                <?php else:?>
                    <h4>Ajouter un article</h4>
                <?php endif;?>
            </header>
            <div class="card">
                <div class="card-header">
                    <h4 class="m-0">Contact</h4>
                </div>
                <div class="tab-content my-3">
                    <div class="tab-pane container-fluid active" id="infos" role="tabpanel" aria-expanded="true">
                        <form action="?page=new_article&method=manual" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Titre :</label>
                                <input class="form-control" value="<?php if(isset($_GET['article_id'])){ echo $articleInfo['title'];}?>" type="text" placeholder="Titre" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="author">Titre :</label>
                                <input class="form-control" value="<?php if(isset($_GET['article_id'])){ echo $articleInfo['auteur'];}?>" type="text" placeholder="Auteur" name="author" id="author">
                            </div>
                            <div class="form-group">
                                <label for="content">Contenu :</label>
                                <textarea class="form-control" name="content" id="content" placeholder="Contenu"><?php if(isset($_GET['article_id'])){ echo $articleInfo['contenu'];}?></textarea>
                            </div>
                            <div class="text-right">
                                <?php if (isset($_GET['article_id'])):?>
                                    <input class="btn btn-success" type="submit" name="update" value="Mettre à jour">
                                <?php else:?>
                                    <input class="btn btn-success" type="submit" name="add" value="Ajouter">
                                <?php endif;?>
                            </div>

                            <input type="hidden" name="id" value="<?php if(isset($_GET['article_id'])){ echo $articleInfo['id'];}?>">

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
</body>
</html>
