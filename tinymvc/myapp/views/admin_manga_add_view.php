        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/index">Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?=URL?>admin/manga">Gestion de la collection</a>
                </li>
                <li class="breadcrumb-item active">Ajout d'un manga</li>
            </ol>
            <!-- Content-->
            <div class="row">
                <div class="col-12">
                <?php if ( isset($success) && $success ) : ?>
                <div class="alert alert-success" role="alert">
                    <u><b>Félicitation !</b></u><br />
                    L'ajout a bien été validé !
                </div>
                <hr />
                <?php endif; ?>

                <?php if ( isset($success) && !$success ) : ?>
                <div class="alert alert-danger" role="alert">
                    <u><b>Mince !</b></u><br />
                    Des champs sont vides ou incorrects...
                </div>
                <hr />
                <?php endif; ?>

                <form method="POST">
                    <div class="form-group row">
                        <label  class="col-2 col-form-label">Lien Nautiljon</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="link" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-2 col-form-label">Titre</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="title" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Date de sortie</label>
                        <div class="col-4">
                            <input class="form-control" type="number" value="2018" min="0" max="9999" name="date-year" required>
                        </div>
                        <div class="col-3">
                            <select class="form-control" name="date-month" required>
                                <option selected>Month</option>
                                <option value="00">00</option>
                                <option value="01">01 - Janvier</option>
                                <option value="02">02 - Fevrier</option>
                                <option value="03">03 - Mars</option>
                                <option value="04">04 - Avril</option>
                                <option value="05">05 - Mai</option>
                                <option value="06">06 - Juin</option>
                                <option value="07">07 - Juillet</option>
                                <option value="08">08 - Aout</option>
                                <option value="09">09 - Septembre</option>
                                <option value="10">10 - Octobre</option>
                                <option value="11">11 - Novembre</option>
                                <option value="12">12 - Decembre</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select class="form-control" name="date-day" required>
                                <option selected>Day</option>
                                <option value="00">00</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Status</label>
                        <div class="col-10">
                            <select class="form-control" name="status" required>
                                <option value="0" selected>En cours..</option>
                                <option value="1">En attente</option>
                                <option value="2">Termin&eacute;</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Nb tomes publié</label>
                        <div class="col-10">
                            <input class="form-control" type="number" value="0" min="0" name="publish" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Nb tomes possedé</label>
                        <div class="col-10">
                            <input class="form-control" type="number" value="0" min="0" name="owned" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Nb tomes a acheter</label>
                        <div class="col-10">
                            <input class="form-control" type="number" value="0" min="0" name="buy" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Prix</label>
                        <div class="col-10">
                            <input class="form-control" type="number" value="9.99" min="0" step="0.01" name="price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">&Eacute;diteur</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="editor" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Type</label>
                        <div class="col-10">
                            <select class="form-control" name="type" required>
                                <option value="Shônen" selected>Shônen</option>
                                <option value="Seinen">Seinen</option>
                                <option value="Hentai">Hentai</option>
                                <option value="Josei">Josei</option>
                                <option value="Shôjo">Shôjo</option>
                                <option value="Kodomo">Kodomo</option>
                                <option value="Global-manga">Global-manga</option>
                            </select>
                        </div>
                    </div>
                    <br />
                    <center>
                        <input type="submit" value="Ajouter le manga !" class="btn btn-outline-primary" name="add_manga"/>
                    </center>
                </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Supprimer un élément</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Attention, vous allez supprimer un manga. <b>Cette action est irréversible</b>. Cliquez sur "Supprimer" pour continer.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-danger" href="<?=URL?>admin/manga_delete/<?=$manga['id']?>">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
