<!DOCTYPE html>
<!-- 
 __       _                 _        __    __          _     
/ _\ __ _| |__   ___ _ __  | | ___  / / /\ \ \___  ___| |__  
\ \ / _` | '_ \ / _ \ '__| | |/ _ \ \ \/  \/ / _ \/ _ \ '_ \ 
_\ \ (_| | |_) |  __/ |    | |  __/  \  /\  /  __/  __/ |_) |
\__/\__,_|_.__/ \___|_|    |_|\___|   \/  \/ \___|\___|_.__/ 
-->
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Analysez un site web">
        <meta name="author" content="Zaxner, Riki">
        <title><?=NAME?></title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?=ASSETS_URL?>vendor/bootstrap/css/bootstrap.min.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?=ASSETS_URL?>css/scrolling-nav.css">
        <!-- FontAwesom -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Favicon -->
        <link  rel="icon" href="<?=ASSETS_URL?>favicon.ico">
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?=URL?>"><img src="<?=ASSETS_URL?>img/logo.png" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?=URL?>home/index">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?=URL?>blog/index">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?=URL?>manga/all">Manga</a>
                        </li>
                        <!-- je manges mon chat
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mangas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?=URL?>manga/all">Tout les mangas</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=URL?>manga/add">Ajouter un manga</a>
                            </div>
                        </li>
                        -->
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <?=$content?>

        <!-- Footer -->
        <footer class="footer py-3">
            <div class="container text-dark">
                <hr />
                <div class="row">
                    <div class="col-sm">
                        <p class="m-0 text-left">
                            Copyright &copy; <?=NAME?> 2018 
                            &bull; 
                            Page g&eacute;n&eacute;r&eacute;e en {TMVC_TIMER} secondes. 
                            
                        </p>
                    </div>
                    <div class="col-sm">
                        <p class="m-0 text-right">
                            <a href="<?=URL?>blog/index" class="text-dark">Blog</a>
                            &bull;
                            <a href="<?=URL?>manga/all" class="text-dark">Collection</a>
                            &bull;
                            <a href="<?=URL?>home/about" class="text-dark font-weight-bold">&Agrave; propos</a>
                            &bull;
                            Conçu par <a href="https://github.com/Zaxner" title="Zaxner" target="_blank">Zaxner</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="<?=ASSETS_URL?>vendor/jquery/jquery.min.js"></script>
        <script src="<?=ASSETS_URL?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="<?=ASSETS_URL?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom JavaScript for this theme -->
        <script src="<?=ASSETS_URL?>js/scrolling-nav.js"></script>

        <!-- CkEditor script -->
        <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'ckeditor' );
        </script>

    </body>

</html>