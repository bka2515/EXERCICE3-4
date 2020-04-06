<?php
/*is_chaine_sent($phrase) permet de verifier si une chaine est une
phrase si oui elle retourne true sinon false*/
function is_phrase_correct($chaine){
    $chaine="Souvenez-vous de moi,";
    if ((preg_match("#^[A-Z]#", $chaine)) and (preg_match("#[.!?]$#", $chaine )) and ($chaine<=200)){
        return true;
    }return false;
    
}
//function is_cut_sentence permet de couper un texte en phrase 
function is_cut_sentence($texte){
   $phrase=preg_split("/([^!.?]+[!.?]+)/", $texte, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    return $phrase;

}
 //function is_delet_space_unutile() supprime les espace unitule
 function supp_space_inutule($chaine){
     $spatern1="% ?' ?%";
     $spatern2='%\s{2,}%';
     $spatern3="% ?;%";
     $remplacement=' ';
     $remplacement2='\'';
     $remplacement3=';';
     $chaine=preg_replace($spatern2, $remplacement, $chaine);
     $chaine=preg_replace($spatern1, $remplacement2, $chaine);
     $chaine=preg_replace($spatern3, $remplacement3, $chaine);
     return $chaine;
 }

