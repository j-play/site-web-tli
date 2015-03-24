<?php 
	require_once(_CORE_.'beans/Pathologie.php');
	require_once(_CORE_.'service/GestionPathologie.php');
    
    if(isset($_POST['filtre-tpatho']) && !empty($_POST['filtre-tpatho'])){
        // Si on arrive dans le contrôlleur avec une requête POST (formulaire des filtres des pathologies)
        echo 'POST!!';    
    }
    else{
        // Si on charge initialement la page des pathologies
        $smarty->assign('listePatho', GestionPathologie::recupererListePathologies());
        $smarty->assign('listeMeridiens', GestionPathologie::recupererListeMeridiens());
    }
    
?>