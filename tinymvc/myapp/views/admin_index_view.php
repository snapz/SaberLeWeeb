        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Accueil</li>
            </ol>
            <!-- Content-->
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
                            <div class="mr-5"><b><?=$new_tomes_data['total_tomes']?></b> mangas à acheter</div>
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
                            <div class="mr-5"><b><?=$miss_tomes_data['total_tomes']?></b> mangas manquants</div>
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
                            <div class="mr-5"><b><?=$waiting_tomes_data['total_tomes']?></b> mangas en attente de sortie</div>
                        </div>
                        <div class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Montant total :</span>
                            <span class="float-right"><?=$waiting_tomes_data['total_price']?> €</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="text-center">
                <a href="<?=URL?>admin/manga_add">
                    <button type="button" class="btn btn-outline-info btn-lg">Ajouter un manga</button>
                </a>
                <a href="<?=URL?>admin/blog_add">
                    <button type="button" class="btn btn-outline-secondary btn-lg">Ajouter un billet</button>
                </a>
            </div>
        </div>