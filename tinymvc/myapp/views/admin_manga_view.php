        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/index">Accueil</a>
                </li>
                <li class="breadcrumb-item active">Gestion de la collection</li>
            </ol>
            <!-- Content-->
            <div class="row">
                <div class="col-12">
                    <table id="manga_table" class="table table-responsive-lg table-striped text-center table-bordered">
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
                                <td><a href="<?php echo $manga['link'] ?>" target="_blank" title="Nautiljon : <?php echo $manga['title'] ?>"><?php echo $manga['title'] ?></a></td>
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
                                    <a href="<?=URL?>admin/manga_edit/<?=$manga['id']?>">
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
        </div>
        <br />