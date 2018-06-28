<header class="bg-primary text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1><?=NAME?></h1>
        <p class="lead">Projet pour Saber. Ntm Ydainna.</p>
    </div>
</header>

<section>
    <div class="container">
        <div class="col-lg-12 mx-auto">
            <h1 class="display-3"><?=NAME?></h1>
            <hr />
            <p class="lead">
                <i><?=NAME?></i> est un gestionnaire de manga pour le sale weeb de <b>Saber</b>.<br />
            </p>
        </div>
        <br />
        <a href="<?=URL?>manga/all">
            <button type="button" class="btn btn-outline-info btn-lg">Ma collection</button>
        </a>
        <a href="<?=URL?>blog/index">
            <button type="button" class="btn btn-outline-success btn-lg">Mon blog</button>
        </a>
        <hr />
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="mr-5"><b><?=$new_tomes_data['total_tomes']?></b> tomes à acheter !</div>
                    </div>
                    <div class="card-footer text-white clearfix small z-1">
                        <span class="float-left">Montant total :</span>
                        <span class="float-right"><?=$new_tomes_data['total_price']?> €</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-times-circle-o"></i>
                        </div>
                        <div class="mr-5"><b><?=$minss_tomes_data['total_missing']?></b> tomes manquant !</div>
                    </div>
                    <div class="card-footer text-white clearfix small z-1">
                        <span class="float-left">Montant total :</span>
                        <span class="float-right"><?=$minss_tomes_data['total_price']?> €</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="mr-5">X tomes en attente de sortie !</div>
                    </div>
                    <div class="card-footer text-white clearfix small z-1">
                        <span class="float-left">Montant total :</span>
                        <span class="float-right">xx€</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>