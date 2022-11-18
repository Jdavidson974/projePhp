<div class="container">
    <div class="row mt-2">
        <div class="col-1">
            <a href="/ordinateurs" class="btn btn-info">Retour</a>
        </div>
        <div class="col-11">
            <h1 class="text-center">Modification de l'ordinateur :
                <em><?php echo($ordinateur[0]['nom_du_poste']) ?></em>
            </h1>
        </div>
        <div class="col-12 mt-2">
            <div id="articlesMain" class="container">
                <div class="wrapper fadeInDown">
                    <div id="formContent">
                        <div class="fadeIn first">
                            Modification
                        </div>

                        <!-- Login Form -->
                        <form id="updating" method="POST">
                            <input type="text" id="nom" class="fadeIn second" name="nom"
                                placeholder="<?php echo($ordinateur[0]['nom_du_poste']) ?>">
                            <input id="update" type="button" class="fadeIn fourth" value="Modifier">
                        </form>


                    </div>
                </div>
                <script src="/src/js/update.js"></script>
            </div>
        </div>
    </div>
</div>