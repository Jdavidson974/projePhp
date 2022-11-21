<?php
    if(!empty($ordinateurs)&& !empty($users)){
        
?>
<h1 class="text-center">Création d'une reservation</h1>
<div id="articlesMain" class="container">
    <div class="wrapper fadeInDown">
        <div id="formContent" class="p-4">
            <div class="fadeIn first">
                Reservation
            </div>

            <!-- Login Form -->
            <form method="POST">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Selectionnez un ordinateur</label>
                    <select name="ordinateur" class="form-control fadeIn second" id="exampleFormControlSelect1">
                        <?php
            foreach($ordinateurs as $ordinateur){ 
        ?>
                        <option value="<?php echo($ordinateur['Id_ordinateurs']) ?>">
                            <?php echo($ordinateur['nom_du_poste']);  ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Selectionnez un utilisateur</label>
                    <select name="user" class="form-control fadeIn second" id="exampleFormControlSelect2">
                        <?php
            foreach($users as $user){ 
        ?>
                        <option value="<?php echo($user['id']) ?>"><?php echo($user['nom'].' : '. $user['prenom']);  ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label class="fadeIn fourth" for="debut">Date de debut : </label>
                        <input class="fadeIn fourth" name="debut" type="datetime-local" id="debut">
                    </div>
                    <div class="col-12">
                        <label class="fadeIn fourth" for="fin">Date de fin : </label>
                        <input class="fadeIn fourth" name="fin" type="datetime-local" id="fin">
                    </div>
                    <div class="col-12 mt-2">
                        <button class="btn btn-success">Faire la reservation</button>
                    </div>
                </div>


            </form>
            <?php
    }else{
        ?>
            Impossible de faire une reservation car il y a a soit aucun ordinateur soit aucun utilisateur.
        </div>
    </div>
    <script src="/src/js/creation.js"></script>
</div>

<?php
    }
?>