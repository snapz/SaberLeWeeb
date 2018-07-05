        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/index">Accueil</a>
                </li>
                <li class="breadcrumb-item active">Gestion du blog</li>
            </ol>
            <!-- Content-->
            <div class="row">
                <div class="col-12">
                    <table id="blog_table" class="table table-responsive-lg table-striped text-center table-bordered">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Auteur</th>
                                <th>Date de publication</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($tickets as $ticket) { ?>
                            <tr>
                                <td><?=$ticket['title']?></td>
                                <td><?=$ticket['content']?></td>
                                <td><?=$ticket['author']?></td>
                                <td><?=$ticket['date']?></td>
                                <td>
                                    <a href="<?=URL?>admin/blog_edit/<?=$ticket['id']?>">
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
                                <th>Contenu</th>
                                <th>Auteur</th>
                                <th>Date de publication</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <br />