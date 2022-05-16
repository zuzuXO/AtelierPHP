<?php 
        if (isset($_POST["note"])){
            if (!isset($_COOKIE["note"])) { ?>
                <div class="alert alert-success">
                    <? $_POST['Message']="votre reponse a été enregistrée avec succés !" ?>
                </div>
            <?php }
            else { ?>
                <div class="alert alert-danger">
                    <?  $_POST['Message']="vous avez deja donné une réponse !";
                    header('location:')
                    ?>
                </div>
            <?php }
        }?>