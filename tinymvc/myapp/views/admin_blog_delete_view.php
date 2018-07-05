        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/index">Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/blog">Gestion du blog</a>
                </li>
                <li class="breadcrumb-item active">Suppression d'un article</li>
            </ol>
            <!-- Content-->
            <div class="row">
                <div class="col-12">
                    <?php if ( isset($success) && $success ) : ?>
                    <div class="alert alert-success" role="alert">
                    <u><b>L'article a été supprimé avec succès !</b></u><br />
                    </div>
                    <hr />
                    <?php endif; ?>

                    <?php if ( isset($success) && !$success ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <u><b>Désolé, cet article n'existe pas...</b></u><br />
                    </div>
                    <hr />
                    <?php endif; ?>

                    <?php if ( !isset($success) ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <u><b>Mince !</b></u><br />
                        Aucun ID saisis pour la suppression !
                    </div>
                    <hr />
                    <?php endif; ?>
                    <div class="text-center">
                        <a href="<?=URL?>admin/blog">
                            <button type="button" class="btn btn-outline-info btn-lg">Tableau des articles</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
