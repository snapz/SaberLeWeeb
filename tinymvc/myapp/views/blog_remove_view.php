<header class="bg-danger text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>Suppression d'un billet</h1>
        <p class="lead">Supprimer un billet</p>
    </div>
</header>

<section>
    <div class="container">
        <div class="col-lg-12 mx-auto">
            <h2>Supprimer un billet</h2>
            <hr />
            
            <?php if ( isset($success) && $success ) : ?>
            <div class="alert alert-success" role="alert">
                <u><b>Félicitation !</b></u><br />
                Le billet a été supprimé avec succès !
            </div>
            <hr />
            <?php endif; ?>

            <?php if ( isset($success) && !$success ) : ?>
            <div class="alert alert-danger" role="alert">
                <u><b>Mince !</b></u><br />
                Le billet n'existe pas !
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

            <a href="<?=URL?>blog/index">
                <button type="button" class="btn btn-outline-info btn-lg">Retourner au blog</button>
            </a>
        </div>
    </div>
</section>