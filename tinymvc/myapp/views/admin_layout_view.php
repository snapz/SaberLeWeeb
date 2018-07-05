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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panel Administration <?=NAME?>">
    <meta name="author" content="Dysta, Riki">
    <title><?=NAME?> Admin</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?=ASSETS_URL?>vendor/bootstrap/css/bootstrap.min.css">
    <!-- DataTable -->
    <link rel="stylesheet" href="<?=ASSETS_URL?>vendor/datatables/datatables.min.css">
    <!-- FontAwesom -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template-->
    <link href="<?=ASSETS_URL?>admin/css/sb-admin.css" rel="stylesheet">
    <!-- Favicon -->
    <link  rel="icon" href="<?=ASSETS_URL?>favicon.ico">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="<?=URL?>admin/index"><?=NAME?> Admin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="<?=URL?>admin/index">
                        <i class="fa fa-fw fa-home"></i>
                        <span class="nav-link-text">Accueil</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="<?=URL?>admin/blog">
                        <i class="fa fa-fw fa-edit"></i>
                        <span class="nav-link-text">Gestion du blog</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="<?=URL?>admin/manga">
                        <i class="fa fa-fw fa-book"></i>
                        <span class="nav-link-text">Gestion de la collection</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!--
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for...">
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link" id="toggleNavColor">
                        <i class="fa fa-fw fa-exchange"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Rafraichir les dates" data-toggle="modal" data-target="#refreshModal">
                        <i class="fa fa-fw fa-refresh"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Retour au site" data-toggle="modal" data-target="#logoutModal">
                        <i class="fa fa-fw fa-sign-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <?=$content?>
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright &copy; <?=NAME?> Admin 2018 &bull; Page g&eacute;n&eacute;r&eacute;e en {TMVC_TIMER} secondes. </small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Retour au site ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Cliquez sur "Déconnexion" si vous voulez retourner sur le site et mettre fin à la session administrative.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-danger" href="<?=URL?>home/index">Déconnexion</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Refresh Modal-->
        <div class="modal fade" id="refreshModal" tabindex="-1" role="dialog" aria-labelledby="resfreshModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="refreshModalLabel">Rafraichir les données</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Cliquez sur "Rafraichir" pour rafraichir les données concernant les tomes en cours de publication.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-primary" href="<?=URL?>/admin/index">Rafraichir</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap core JavaScript -->
        <script src="<?=ASSETS_URL?>vendor/jquery/jquery.min.js"></script>
        <script src="<?=ASSETS_URL?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="<?=ASSETS_URL?>vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- CkEditor script -->
        <script src="<?=ASSETS_URL?>vendor/ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'ckeditor' );
            CKEDITOR.config.height = 400;
        </script>
        <!-- DataTable script -->
        <script src="<?=ASSETS_URL?>vendor/datatables/datatables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#manga_table').DataTable( {
                    "language": {
                        "decimal":        "",
                        "emptyTable":     "Rien à afficher",
                        "info":           "_START_ - _END_/_TOTAL_",
                        "infoEmpty":      "Le tableau est vide",
                        "infoFiltered":   "(filtered from _MAX_ total entries)",
                        "infoPostFix":    "",
                        "thousands":      ",",
                        "lengthMenu":     "Nombre de mangas à afficher : _MENU_",
                        "loadingRecords": "Chargement...",
                        "processing":     "Chargement...",
                        "search":         "Rechercher un manga :",
                        "zeroRecords":    "Aucun résultat",
                        "paginate": {
                            "first":      "Premier",
                            "last":       "Dernier",
                            "next":       "<i class=\"fa fa-chevron-right\"></i>",
                            "previous":   "<i class=\"fa fa-chevron-left\"></i>"
                        },
                    },
                    "order": [
                        [1, "asc"],
                        [0, "asc"],
                    ],
                    "iDisplayLength": 50
                });
            } );
            $(document).ready( function () {
                $('#blog_table').DataTable( {
                    "language": {
                        "decimal":        "",
                        "emptyTable":     "Rien à afficher",
                        "info":           "_START_ - _END_/_TOTAL_",
                        "infoEmpty":      "Le tableau est vide",
                        "infoFiltered":   "(filtered from _MAX_ total entries)",
                        "infoPostFix":    "",
                        "thousands":      ",",
                        "lengthMenu":     "Nombre de billets à afficher : _MENU_",
                        "loadingRecords": "Chargement...",
                        "processing":     "Chargement...",
                        "search":         "Rechercher un billet :",
                        "zeroRecords":    "Aucun résultat",
                        "paginate": {
                            "first":      "Premier",
                            "last":       "Dernier",
                            "next":       "<i class=\"fa fa-chevron-right\"></i>",
                            "previous":   "<i class=\"fa fa-chevron-left\"></i>"
                        },
                    },
                    "iDisplayLength": 25
                });
            } );
        </script>
        <!-- Custom scripts for all pages-->
        <script src="<?=ASSETS_URL?>admin/js/sb-admin.min.js"></script>
        <!-- Change color-->
        <script>
            $('#toggleNavColor').click(function() {
                $('nav').toggleClass('navbar-dark navbar-light');
                $('nav').toggleClass('bg-dark bg-light');
                $('body').toggleClass('bg-dark bg-light');
            });
        </script>
    </div>
</body>

</html>