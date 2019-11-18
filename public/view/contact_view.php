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
            <div class="card">
                <div class="card-header">
                    <h4 class="m-0">Contact</h4>
                </div>
                <div class="tab-content my-3">
                    <div class="tab-pane container-fluid active" id="infos" role="tabpanel" aria-expanded="true">
                        <!-- Si $article existe, chaque champ du formulaire sera pré-remplit avec les informations de l'article -->
                        <form action="?page=contact" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Sujet :</label>
                                <input class="form-control"  type="text" placeholder="sujet" name="subject" id="sujet">
                            </div>
                            <div class="form-group">
                                <label for="author">Message :</label>
                                <input class="form-control"  type="text" placeholder="message" name="message" id="message">
                            </div>
                            <div class="form-group">
                                <label for="content">Mail :</label>
                                <input class="form-control" name="mail" id="mail" placeholder="mail">
                            </div>
                            <div class="text-right">
                                <input class="btn btn-success" type="submit" name="send" value="Envoyer">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>

</div>
</body>
</html>
