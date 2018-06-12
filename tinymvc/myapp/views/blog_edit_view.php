<header class="bg-info text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>&Eacute;dition d'un billet</h1>
        <p class="lead">&Eacute;diter un billet du blog</p>
    </div>
</header>

<section>
    <div class="container">
        <div class="col-lg-12 mx-auto">
            <h2>&Eacute;diter un billet</h2>
            <hr />
            <?php if ( isset($success) && $success ) : ?>
            <div class="alert alert-success" role="alert">
                <u><b>Félicitation !</b></u><br />
                Le billet a été édité avec succès !
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
                Aucun billet indiqué !
            </div>
            <hr />
            <?php } else if ( isset($ticket) && empty($ticket) ) { ?>
            <div class="alert alert-danger" role="alert">
                <u><b>Mince !</b></u><br />
                Aucun billet trouvé !
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
                <a href="<?=URL?>blog/remove/<?=$ticket['id']?>" title="supprimer le billet">
                    <button class="btn btn-outline-danger">Supprimer le billet</button>
                </a>
            </center>
            <?php } ?>
        </div>
    </div>
</section>