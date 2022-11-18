<div class="container">
    <!-- header -->
    <div class="row bg-info text-white">
        <div class="col-2"><b>Nom </b></div>
        <div class="col-2"><b>Prenom </b></div>
        <div class="col-2"><b>Nom du poste </b></div>
        <div class="col-2"><b>Debut </b></div>
        <div class="col-2"><b>Fin </b></div>
        <div class="col-2"><b>Action </b></div>
    </div>
    <!-- item  -->
    <?php 
        if(!empty($reservations)>0){
            foreach($reservations as $reservation){
    ?>
    <div class="row">
        <div class="col-2 p-4 bg-secondary"><?php echo($reservation['nom']) ?></div>
        <div class="col-2 p-4 bg-secondary"><?php echo($reservation['prenom']) ?></div>
        <div class="col-2 p-4 bg-secondary"><?php echo($reservation['nom_du_poste']) ?></div>
        <div class="col-2 p-4 bg-secondary"><?php echo($reservation['date_de_reservation']) ?></div>
        <div class="col-2 p-4 bg-secondary"><?php echo($reservation['date_de_fin']) ?></div>
        <div class="col-2 p-4 bg-secondary"><a href="reservations/delete/<?php echo($reservation['id']) ?>"
                class="btn btn-info">Annuler</a></div>

    </div>
    <?php
            }
        }else{
            echo ('pas de reservation');
        }
    ?>
    <div class="row mt-2">
        <a href="/reservations/create" class="btn btn-success">Faire une reservations</a>
    </div>
</div>