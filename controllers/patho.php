<?php 
	require_once(_CORE_.'beans/Pathologie.php');
	require_once(_CORE_.'service/GestionPathologie.php');
    
    if(isset($_POST['filtre-tpatho']) && !empty($_POST['filtre-tpatho'])){
        // Si on arrive dans le contrôlleur avec une requête POST (formulaire des filtres des pathologies)
        echo 'POST!!';    
    }
    else{
        $smarty->assign('listeMeridiens', GestionPathologie::recupererListeMeridiens());
        $smarty->assign('listePatho', GestionPathologie::recupererListePathologies());
        if(isset($_GET['idPatho']) && !empty($_GET['idPatho'])){
            $idPatho =$_GET['idPatho'];
            $smarty->assign('pathologie', GestionPathologie::recupererPathologie($idPatho));
        }
    }
    
?>