<header class="bg-success text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>&Agrave; propos de <?=NAME?></h1>
        <p class="lead">Nous n'avons rien à vous cacher.</p>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2 id="what">Qu'est-ce que <?=NAME?> ?</h2>
            <hr />
            <p class="lead">
            <i><?=NAME?></i> vous proposes une analyse permettant de vérifier rapidement l'authenticité d'un site.<br />
            La force de <i><?=NAME?></i> est qu'il est communautaire. Vous pouvez très facilement avoir accès aux sites précédemment analysé par les autres utilisateurs.<br />
            </p>
        </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2>Comment ça marche ?</h2>
            <hr />
            <p class="lead">
            <i><?=NAME?></i> repose sur un algorithme d'analyse d'URL crée par notre équipe.<br />
            Sur la <a href="<?=URL?>home/index" class="link">page d'accueil</a>, vous trouverez un petit encart avec un formulaire.<br />
            Il vous suffit simplement de copier/coller un lien qui vous semble suspect et <i><?=NAME?></i> s'occupe du reste.
            </p>
            <h4>Et l'analyse ?</h4>
            <p class="lead">
            L'analyse repose sur un système de <u>score</u>. Plus l'URL contient de critère semblable à un site de phishing (comme un nombre élevé de <b>-</b>), plus le score augmente.<br />
            Une fois l'analyse terminé, nous enregistrons le score et vous nous l'affichons. 
            <div class="alert alert-warning" role="alert">
                <u>Attention, le score est donné à titre indicatif !</u> L'algorithme n'est pas infaillible et peut générer des <i>faux positifs</i> ou des <i>faux négatifs</i>.<br />
                A vous ensuite d'utiliser votre bon sens pour déterminer si oui ou non le site est authentique.
            </div>
            </p>
        </div>
        </div>
    </div>
</section>
