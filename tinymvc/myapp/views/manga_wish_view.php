<header class="bg-success text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>Wish list</h1>
        <p class="lead">Pour mon libraire préféré <3</p>
    </div>
</header>

<div class="container">
    <section>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>Liste des tomes à acheter</h2>
                <hr />
                <table id="manga_table" class="table table-responsive-lg table-striped text-center table-bordered">
                    <thead>
                        <tr>
                            <th width="50%">Titre</th>
                            <th width="50%">Tomes à acheter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($mangas as $manga){ ?>
                        <tr class="table">
                            <td><?php echo $manga['title'] ?></td>
                            <?php if ( $manga['wished']['start'] == $manga['wished']['end'] ) : ?>
                            <td>Tome <?php echo $manga['wished']['end'] ?></td>
                            <?php else : ?>
                            <td>Tome <?php echo $manga['wished']['start'] ?> à <?php echo $manga['wished']['end'] ?></td>
                            <?php endif; ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Titre</th>
                            <th>Tomes à acheter</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>
