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
            <br />
            <a href="<?=URL?>blog/index">
                <button type="button" class="btn btn-outline-success btn-lg">Mon blog</button>
            </a>
            <a href="<?=URL?>manga/all">
                <button type="button" class="btn btn-outline-info btn-lg">Ma collection</button>
            </a>
        </div>
        <hr />
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-info o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="mr-5"><b><?=$total_tomes_data['total_tomes']?></b> mangas possédés</div>
                    </div>
                    <div class="card-footer text-white clearfix small z-1">
                        <span class="float-left">Montant total :</span>
                        <span class="float-right"><?=$total_tomes_data['total_price']?> €</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="mr-5"><b><?=$new_tomes_data['total_tomes']?></b> manga à acheter</div>
                    </div>
                    <div class="card-footer text-white clearfix small z-1">
                        <span class="float-left">Montant total :</span>
                        <span class="float-right"><?=$new_tomes_data['total_price']?> €</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-times-circle-o"></i>
                        </div>
                        <div class="mr-5"><b><?=$miss_tomes_data['total_tomes']?></b> mangas manquant</div>
                    </div>
                    <div class="card-footer text-white clearfix small z-1">
                        <span class="float-left">Montant total :</span>
                        <span class="float-right"><?=$miss_tomes_data['total_price']?> €</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-secondary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="mr-5"><b>?</b> mangas en attente de sortie</div>
                    </div>
                    <div class="card-footer text-white clearfix small z-1">
                        <span class="float-left">Montant total :</span>
                        <span class="float-right">? €</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>