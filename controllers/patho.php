<?php 
	require_once(_CORE_.'beans/Pathologie.php');
	require_once(_CORE_.'service/GestionPathologie.php');
    
	// Si le contrôleur est appelé avec des filtres (hors du premier chargement de la page
    if(isset($_POST['filtre-tpatho'])){
        // Si on arrive dans le contrôlleur avec une requête POST (formulaire des filtres des pathologies
        $typePatho="";
        $meridien="";
        $caracPatho="";
        $motCle="";
        
        // Récupération des paramètres POST
    	if (isset($_POST['filtre-tpatho'])){
    		$typePatho = htmlentities($_POST['filtre-tpatho'], ENT_QUOTES, 'UTF-8');
		}
    	if (isset($_POST['filtre-meridien'])){
    		$meridien = htmlentities($_POST['filtre-meridien'], ENT_QUOTES, 'UTF-8');
		}
    	if (isset($_POST['filtre-carac'])){
    		$caracPatho = htmlentities($_POST['filtre-carac'], ENT_QUOTES, 'UTF-8');
		}
    	if (isset($_POST['filtre-mot-cle'])){
    		$motCle = htmlentities($_POST['filtre-mot-cle'], ENT_QUOTES, 'UTF-8');
		}
        $smarty->assign('listePatho', GestionPathologie::recupererListePathologies($typePatho, $meridien, $caracPatho, $motCle));
        $smarty->assign('listeMeridiens', GestionPathologie::recupererListeMeridiens());
        
    }
    else{
		// On charge les différents listes présentes dans la page des pathologies
        $smarty->assign('listeMeridiens', GestionPathologie::recupererListeMeridiens());
        $smarty->assign('listePatho', GestionPathologie::recupererListePathologies(null, null, null, null));
        if(isset($_GET['idPatho']) && !empty($_GET['idPatho'])){
            $idPatho = htmlentities($_GET['idPatho'], ENT_QUOTES, 'UTF-8');
            $smarty->assign('pathologie', GestionPathologie::recupererPathologie($idPatho));
        }
    }
    
?>