<header class="bg-secondary text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>Article</h1>
        <p class="lead">Blog personnelle.</p>
    </div>
</header>

<section>
    <div class="container">
        <?php if ( !isset($ticket) ) { ?>
        <div class="alert alert-danger" role="alert">
            <u><b>Mince !</b></u><br />
            Aucun article indiqué !
        </div>
        <?php } else if (isset($ticket) && empty($ticket) ) { ?>
        <div class="alert alert-danger" role="alert">
            <u><b>Mince !</b></u><br />
            L'article indiqué n'existe pas !
        </div>
        <?php } else { ?>
        <h5><a href="<?=URL?>blog/index" title="retourner à l'index">Tout les articles</a> > <?php echo $ticket['title'] ?></h5>
        <hr />
        <div class="row">
            <div class="col-12">
                <h1><?php echo $ticket['title'] ?></h1>
                <hr />
                <p class="lead"><i class="fa fa-user"></i> <b><?php echo $ticket['author'] ?></b></p>
                <p><i class="fa fa-calendar"></i> Post&eacute; le <b><?php echo $ticket['date'] ?></b></p>
                <hr />
                <span class="lead">
                    <?php echo $ticket['content'] ?>
                </span>
            </div>
        </div>
        <?php } ?>
    </div>
</section>