        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/index">Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/blog">Gestion du blog</a>
                </li>
                <li class="breadcrumb-item active">Rédaction d'un article</li>
            </ol>
            <!-- Content-->
            <div class="row">
                <div class="col-12">
                    <?php if ( isset($success) && $success ) : ?>
                    <div class="alert alert-success" role="alert">
                        <u><b>Félicitation !</b></u><br />
                        L'article a été ajouté avec succès !
                    </div>
                    <hr />
                    <?php endif; ?>

                    <?php if ( isset($success) && !$success ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <u><b>Mince !</b></u><br />
                        Complète le formulaire et réessaye !
                    </div>
                    <hr />
                    <?php endif; ?>

                    <form method="POST">
                        <div class="form-group row">
                            <label  class="col-2 col-form-label">Titre</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="title" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-2 col-form-label">Contenu</label>
                            <div class="col-10">
                                <textarea class="form-control" id="ckeditor" name="content" required></textarea>
                            </div>
                        </div>
                        <br />
                        <center>
                            <input type="submit" value="Publier l'article !" class="btn btn-outline-primary" name="add_ticket"/>
                        </center>
                    </form>
                </div>
            </div>
        </div>

