<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Voicis tout les utilisateurs</h1>
        </div>

        <div class="scroll-div col-12">
            <div class="row">
                <?php 
                    if(!empty($allUsers)){
                        foreach($allUsers as $item){ 
                ?>
                <div class="col-4 mt-2">
                    <div class="card p-2">
                        <div class="card-body">
                            <div>
                                <span><b>carte identité:</b> <?php echo($item['num_identite']) ?></span>
                                <br>
                                <span><b>nom:</b> <?php echo($item['nom']) ?></span>
                                <br>
                                <span><b>prénom:</b> <?php echo($item['prenom']) ?></span>
                                <br>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <a href="utilisateurs/update/<?php echo($item['id'])?>"
                                        class="btn btn-info">Modifier</a>
                                </div>
                                <div class="col-6">
                                    <a href="utilisateurs/delete/<?php echo($item['id'])?>"
                                        class="btn btn-danger">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
           }
        }
        ?>
            </div>
        </div>

    </div>
    <div class="row mt-2">
        <div class="col-12">
            <a href="/utilisateurs/create" class="btn btn-success">Ajouter un utilisateur</a>
        </div>
    </div>
</div>