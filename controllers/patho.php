<?php 
	require_once(_CORE_.'beans/Pathologie.php');
	require_once(_CORE_.'service/GestionPathologie.php');
    
    // Récupération de la liste des pathologies puis assignation pour affichage dans le template des pathologies
    $smarty->assign('listePatho', GestionPathologie::recupererListePathologies());
    $smarty->assign('listeMeridiens', GestionMeridien::recupererListeMeridiens());
?>