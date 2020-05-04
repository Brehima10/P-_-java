<?php

//rectangle
//UC
  //matricule
  //prenom
  //nom
  //sexe
  //adresse
  //service
  //fonction

  //Alternance
  //R1-matricule doit être unique
  //R2-matricule, prenom, nom, adresse ne doivent pas être vide
  //R3-sexe, service et fonction doivent être selectionnés 
//Function de validation

//Alternance
//R2
function isvide(matricule){
    if (empty$matricule)){
        return true;
    }
        return false;

 }
 function isvide(prenom){
    if (empty$prenom)){
        return true;
    }
        return false;

 }
 function isvide(nom){
    if (empty$nom)){
        return true;
    }
        return false;

 }
 function isvide(adresse){
    if (empty$adresse)){
        return true;
    }
        return false;

 }
 //R3
Function isselect($sexe, $service, $fonction{
      if(is_select($sexe, $service, $fonction)){
          return true;
      }
          return false;
 } 

//R1
Function unregister_tick_function(matricule){
     if($matricule){
          return true;
     }
          return false;
}
//UC
  //matricule
  Function matricule(""){
      return $matricule;
  }
  //prenom
  Function prenom(""){
      echo $prenom;
  }
  //nom
  Function nom(""){
      return $nom;
  }
  //sexe
  Function sexe(""){
      echo $sexe;
  }
  Function adresse(""){
    echo $adresse;
}
Function service(""){
    echo $service;
}
Function fonction(""){
    echo $fonction;
}
?>
<?php
        
                if(isset($_POST['Envoyer'])){
                    $prenom=$_POST['prenom'];
                    $nom=$_POST['nom'];
                    $matricule=$_POST['matricule'];
                    $sexe=$_POST['sexe']; $prenom=$_POST['prenom'];
                    $service=$_POST['service'];
                    $fonction=$_POST['fonction'];
                    $adresse=$_POST['adresse'];
                if(!empty($prenom) AND !empty($nom) AND !empty($adresse) AND !empty($matricule) AND !empty($sexe) AND !empty($service) AND !empty($fonction)){
                    echo"votre prenom : ".($_POST['prenom']);
                    echo"</br>";
                    echo"votre  nom : ".($_POST['nom']);  echo"</br>";
                    echo"votre matricule : ".($_POST['matricule']);
                    echo"</br>";
                    echo"votre  sexe: ".($_POST['sexe']);
                    echo"</br>";
                    echo"votre adresse : ".($_POST['adresse']);
                    echo"</br>";
                    echo"votre  service : ".($_POST['service']);
                    echo"</br>";
                    echo"votre fonction : ".($_POST['fonction']);
                    } 
                }else echo"infos man";
?>