<?php 
	require_once(_CORE_.'beans/Pathologie.php');
	require_once(_CORE_.'service/GestionPathologie.php');


    GestionPathologie::creationRSSListePathologie();
    header('Location: resources/listePathologie.xml');   
    
?>