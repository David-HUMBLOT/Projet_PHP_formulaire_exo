


<?php 

//D2CLARATION DE FONCTION stoke data 

function stokedata(){
//VARIABLE qui récupérera sous forme de tableau les datas formulaire (prenom et nom)
global $data = array ($_SESSION['prenom'], $_SESSION['nom']);

//vérification des élément de la variable tableaux $data;
echo 'cette fonction fonctionne'
print_r ('$data');
echo '$data';
};

?>