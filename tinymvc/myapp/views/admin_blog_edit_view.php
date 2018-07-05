        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/index">Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/blog">Gestion du blog</a>
                </li>
                <li class="breadcrumb-item active">&Eacute;dition d'un article</li>
            </ol>
            <!-- Content-->
            <div class="row">
                <div class="col-12">
                    <?php if ( isset($success) && $success ) : ?>
                    <div class="alert alert-success" role="alert">
                        <u><b>Félicitation !</b></u><br />
                        L'article a été édité avec succès !
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

                    <?php if ( !isset($ticket) ) { ?>
                    <div class="alert alert-danger" role="alert">
                        <u><b>Mince !</b></u><br />
                        Aucun article indiqué !
                    </div>
                    <hr />
                    <?php } else if ( isset($ticket) && empty($ticket) ) { ?>
                    <div class="alert alert-danger" role="alert">
                        <u><b>Mince !</b></u><br />
                        Aucun article trouvé !
                    </div>
                    <hr />
                    <?php } else { ?>
                    <form method="POST">
                        <div class="form-group row">
                            <label  class="col-2 col-form-label">Titre</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="title" maxlength="32" value="<?=$ticket['title']?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-2 col-form-label">Contenu</label>
                            <div class="col-10">
                                <textarea class="form-control" id="ckeditor" name="content" required><?=$ticket['content']?></textarea>
                            </div>
                        </div>
                        <br />
                        <center>
                            <input type="submit" value="Modifier l'article !" class="btn btn-outline-primary" name="edit_ticket"/>
                        </center>
                    </form>
                    <hr />
                    <center>
                        <a title="supprimer l'article" data-toggle="modal" data-target="#deleteModal">
                            <button class="btn btn-outline-danger">Supprimer l'article</button>
                        </a>
                    </center>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Delete Modal-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Supprimer un élément</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Attention, vous allez supprimer un article. <b>Cette action est irréversible</b>. Cliquez sur "Supprimer" pour continer.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-danger" href="<?=URL?>admin/blog_delete/<?=$ticket['id']?>">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
