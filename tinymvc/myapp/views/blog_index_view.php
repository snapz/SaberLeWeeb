<header class="bg-primary text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1><?=NAME?></h1>
        <p class="lead">Blog personnelle.</p>
    </div>
</header>

<section>
    <div class="container">
        <h2>Tout les billets<a href="<?=URL?>blog/add"><button class="btn btn-sm btn-outline-primary float-right" title="Ajouter un billet"><i class="fa fa-plus"></i></button></a></h2>
        <hr />
        <div class="row">
            <?php foreach($tickets as $ticket) { ?>
            <div class="col-sm-12 col-lg-6">
                <div class="panel panel-default border">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h2><?php echo $ticket['title'] ?></h2>
                            <p><?php echo $ticket['content'] ?></p>
                            <hr />
                            <h6 class="float-left font-weight-bold">
                                <i class="fa fa-user"></i> <?php echo $ticket['author'] ?><br />
                                <small class="text-muted font-weight-light"><i class="fa fa-calendar"></i> <?php echo $ticket['date'] ?></small>
                            </h6>
                            
                            <a href="<?=URL?>blog/view/<?=$ticket['id']?>">
                                <button type="button" class="btn btn-outline-info float-right">
                                    Voir tout l'article <i class="fa fa-chevron-right"></i>
                                </button>
                            </a>
                            <a href="<?=URL?>blog/edit/<?=$ticket['id']?>">
                                <button type="button" class="btn btn-outline-success float-right">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>