<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title;?></title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="public/js/jquery-minified.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bad7172f0a.js" crossorigin="anonymous"></script> <!--cdn fontawesome source: https://fontawesome.com/kits/bad7172f0a/settings !-->    
</head>
    <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=formAccessAdmin">Connexion admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=formAccessUser">Connexion membres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=inscription">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=home">visteur</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="containerContent +">
    <?= $content ?> <!--will contain what you want to put in the direction of listPostView.php !-->
    </div>
    </body>
</html>