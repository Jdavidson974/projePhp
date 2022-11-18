<div class="container">
    <div class="row mt-2">
        <div class="col-1">
            <a href="/utilisateurs" class="btn btn-info">Retour</a>
        </div>
        <div class="col-11">
            <h1 class="text-center">Modification de
                l'utilisateur <br><em><?php echo($user[0]['nom'].' '.$user[0]['prenom']) ?></em>
            </h1>
        </div>
        <div class="col-12 mt-2">
            <div id="articlesMain" class="container">
                <div class="wrapper fadeInDown">
                    <div id="formContent">
                        <div class="fadeIn first">
                            Modification d'utilisateur
                        </div>

                        <!-- Login Form -->
                        <form id="updating" method="POST">
                            <input type="text" id="id" class="fadeIn second" name="num-id"
                                placeholder="<?php echo($user[0]['num_identite'])?>"
                                value="<?php echo($user[0]['num_identite'])?>">
                            <input type="text" id="nom" class="fadeIn second" name="nom"
                                placeholder="<?php echo($user[0]['nom']) ?>" value="<?php echo($user[0]['nom'])?>">
                            <input type="text" id="prenom" class="fadeIn third" name="prenom"
                                placeholder="<?php echo($user[0]['prenom']) ?>"
                                value="<?php echo($user[0]['prenom'])?>">
                            <input id="update" type="button" class="fadeIn fourth" value="update">
                        </form>
                    </div>
                </div>
                <script src="/src/js/update.js"></script>
            </div>
        </div>
    </div>
</div>