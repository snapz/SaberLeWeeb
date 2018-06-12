<header class="bg-info text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>Ajout d'un billet</h1>
        <p class="lead">Ajouter un billet au blog</p>
    </div>
</header>

<section>
    <div class="container">
        <div class="col-lg-12 mx-auto">
            <h2>Ajouter un billet</h2>
            <hr />
            <?php if ( isset($success) && $success ) : ?>
            <div class="alert alert-success" role="alert">
                <u><b>Félicitation !</b></u><br />
                Le billet a été ajouté avec succès !
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
</section>