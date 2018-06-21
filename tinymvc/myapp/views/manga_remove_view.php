<header class="bg-danger text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>Suppression</h1>
        <p class="lead">Parce que voir certains titres vous énervent ?</p>
    </div>
</header>

<section>
    <div class="container">
        <div class="col-lg-12 mx-auto">
            <h2>Supprimer un manga</h2>
            <hr />
            
            <?php if ( isset($success) && $success ) : ?>
            <div class="alert alert-success" role="alert">
            <u><b>Le manga a été supprimé avec succès !</b></u><br />
            </div>
            <hr />
            <?php endif; ?>

            <?php if ( isset($success) && !$success ) : ?>
            <div class="alert alert-danger" role="alert">
                <u><b>Désolé, ce manga n'existe pas...</b></u><br />
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

            <a href="<?=URL?>manga/all">
                <button type="button" class="btn btn-outline-info btn-lg">Tableau des mangas</button>
            </a>
        </div>
    </div>
</section>