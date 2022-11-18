<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Voicis tout les ordinateurs</h1>
        </div>

        <div class="scroll-div col-12">
            <div class="row">
                <?php 
            if(!empty($allOrdinateurs)){
                foreach($allOrdinateurs as $item){ 
        ?>
                <div class="col-4 mt-2">
                    <div class="card p-2">
                        <div class="card-body">
                            <div>
                                <span><b>id:</b> <?php echo($item['Id_ordinateurs']) ?></span>
                                <br>
                            </div>
                            <span><?php echo($item['nom_du_poste']) ?></span>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <a href="ordinateurs/update/<?php echo($item['Id_ordinateurs'])?>"
                                        class="btn btn-info">Modifier</a>
                                </div>
                                <div class="col-6">
                                    <a href="ordinateurs/delete/<?php echo($item['Id_ordinateurs'])?>"
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
            <a href="/ordinateurs/create" class="btn btn-success">Ajouter un ordinateur</a>
        </div>
    </div>
</div>