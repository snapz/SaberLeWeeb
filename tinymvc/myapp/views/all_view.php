<header class="bg-secondary text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>Tout les mangas</h1>
        <p class="lead">Tout les mangas de ce sale weeb.</p>
    </div>
</header>

<div class="container">
    <section>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>Tout les mangas<a href="<?=URL?>analyzes/latest"><button class="btn btn-sm btn-outline-primary float-right" title="Chercher un manga"><i class="fa fa-search"></i></button></a></h2>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date de publication</th>
                            <th>Status</th>
                            <th>Tomes publiés</th>
                            <th>Tomes possédés</th>
                            <th>Tomes manquant</th>
                            <th>Tomes à acheter</th>
                            <th>Prix public</th>
                            <th>&Eacute;diteur</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($mangas as $manga){ ?>
                        <tr class="table">
                            <td><?php echo $manga['title'] ?></td>
                            <td><?php echo $manga['date'] ?></td>
                            <td><?php echo $manga['status'] ?></td>
                            <td><?php echo $manga['published'] ?></td>
                            <td><?php echo $manga['owned'] ?></td>
                            <td><?php echo $manga['missing'] ?></td>
                            <td><?php echo $manga['buying'] ?></td>
                            <td><?php echo $manga['price'] ?></td>
                            <td><?php echo $manga['editor'] ?></td>
                            <td><?php echo $manga['type'] ?></td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="<?=URL?>manga/edit/<?=$manga['id']?>">
                                            <button class="btn btn-sm btn-primary float-left" title="Editer le manga">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="<?=URL?>manga/remove/<?=$manga['id']?>">
                                            <button style="margin-top:-31px" class="btn btn-sm btn-danger float-right" title="Supprimer le manga">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>