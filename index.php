
 <?php 
 require_once "fonction.php"; 
 

 $message = ''; 
     $nbrChamps = 3;
     $cpt=2; 
     if (isset($_POST['btn'])){ 
         $nbrChamps = $_POST['nbre']; 
         if (!is_chaine_numeric($nbrChamps)){ 
             $message = 'Veuillez saisir un entier !'; 
             $nbrChamps =""; 
         }elseif (is_empty($nbrChamps)) { 
             $message = 'Champ obligatoire'; 
         } 
     } 

 

         
     
 
 
    $tabMots = []; 
    $errors = []; 
    $motsAvecM = []; 
 

    if (isset($_POST['btnResultat'])){ 
        if (isset($_POST['nbr'])) {
        $nbr=$_POST['nbre']; 
            for ($i=0;$i<$nbrChamps;$i++){ 
             $mot = $_POST['mot_'.$i]; 
             if (long_chaine($mot)>20){ 
                 $errors[$i] = 'Le mot ne doit pas dépasser 20 caractères'; 
             } 
             elseif (!is_chaine_alpha($mot)){ 
                $errors[$i]= 'Des lettres uniquement'; 
             } 
            elseif (is_empty($mot)){ 
                    $errors[$i] = 'Champ vide'; 
             }else {
                 $tabMots[$i]=$mot;
                 if (is_car_present_in_chaine( 'm',$tabMots[$i] || is_car_present_in_chaine('M',$tabMots[$i]))) {
                    $motsAvecM[$i] =$tabMots[$i];
                    $cpt++;
                 }
             }  
            }
        }
            if ($errors==[]) {
                $result='Vous avez saisi'.$nbrChamps;
                $cpt=sizeof($motsAvecM);
                'Mot(s) dont <span class="mot">'.$cpt.'avec la lettre M</span>';

            }
        }
    
    
        ?>
        <!doctype html> 
 <html lang="fr"> 
 <head> 
     <meta charset="UTF-8"> 
     <meta name="viewport" 
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
     <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
     <link rel="stylesheet" href="../qcm/bootstrap.min.css"> 
     <title>Exercice 3</title> 
 </head> 
 <body> 
 <form action="" method="POST"> 
     <div class="col-md-2 offset-5"> 
         <div class="form-group"> 
             <label for="nbre">Combien de Mots</label> 
             <input type="text" autocomplete="off" value="<?= $nbrChamps ?>" name="nbre" id="nbre" class="form-control"> 
             <p class="text-danger small text-center"><?= $message ?></p> 
         </div> 
         <div class="col text-center"> 
             <button type="submit" name="btn" class="btn btn-primary">Valider</button> 
             <button type="submit" name="btnA" class="btn btn-danger">Annuler</button> 
         </div> 
     </div> 
   <div class="row mt-5"> 
        <?php for ($i=0;$i<$nbrChamps;$i++){ ?> 
         <div class="col-md-6 offset-3 mb-2"> 
             <label for="">Mot N°<?= $i+1 ?></label> 
             <span class="small text-danger"><?= isset($errors[$i]) ? '( '. print_error($errors[$i]) .' )' : '' ?></span> 
             <input type="text" autocomplete="off" value="<?= isset($tabMots[$i]) ? $tabMots[$i] : '' ?>" name="mot_=".$i class="form-control"> 
         </div> 
         <?php } ?> 
     </div> 
     <?php if ($nbrChamps && empty($message)){ ?> 
     <div class="col-md-2 offset-5"> 
         <button type="submit" name="btnResultat" class="btn btn-block btn-success">Résultats</button> 
    </div> 
     <?php } ?> 
</form> 
 
 
 <?php if (empty($errors) && isset($_POST['btnResultat'])){ ?> 
     <div class="jumbotron"> 
         <div class="text-center"> 
            <p class="display-4">Vous avez saisi <?= $nbrChamps ?> Mot(s) dont
             <span class="alert alert-success"><?$cpt= count($motsAvecM) ?> avec la lettre M</span></p> 
        </div> 
     </div> 
<?php } ?> 

 
</body> 
 </html> 
