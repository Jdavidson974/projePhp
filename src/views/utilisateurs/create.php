<div class="container">
    <div class="row mt-2">
        <div class="col-1">
            <a href="/utilisateurs" class="btn btn-info">Retour</a>
        </div>
        <div class="col-11">
            <h1 class="text-center">Création d'utilisateur</h1>
        </div>
        <div class="col-12 mt-2">
            <div id="articlesMain" class="container">
                <div class="wrapper fadeInDown">
                    <div id="formContent">
                        <div class="fadeIn first">
                            Création d'utilisateur
                        </div>

                        <!-- Login Form -->
                        <form id="creating" method="POST">
                            <input type="text" id="id" class="fadeIn second" name="id" placeholder="Numero d'identité">
                            <input type="text" id="nom" class="fadeIn second" name="nom"
                                placeholder="Nom de l'utilisateur">
                            <input type="text" id="prenom" class="fadeIn third" name="prenom"
                                placeholder="Prenom de l'utilisateur">
                            <input id="create" type="button" class="fadeIn fourth" value="Création">
                        </form>


                    </div>
                </div>
                <script src="/src/js/creation.js"></script>
            </div>
        </div>
    </div>
</div>