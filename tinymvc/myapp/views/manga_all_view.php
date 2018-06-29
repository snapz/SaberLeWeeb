<header class="bg-secondary text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>Aperçu de la collection</h1>
        <p class="lead">Parce que gérer tout ça sur Excel c'est chiant !</p>
    </div>
</header>

<div class="container">
    <section>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>Tout les mangas<a href="<?=URL?>manga/wish_list"><button class="btn btn-sm btn-outline-primary float-right" title="Voir la wish list"><i class="fa fa-gift"></i></button></a></h2>
                <hr />
                <table id="manga_table" class="col-md-12 table-responsive-lg table-striped text-center table-bordered">
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
                                <a href="<?=URL?>manga/edit/<?=$manga['id']?>">
                                    <button class="btn btn-sm btn-primary float-left" title="Editer le manga">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
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
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>
