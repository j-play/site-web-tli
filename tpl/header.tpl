<!DOCTYPE html>

<html lang="FR">
<head>
    <meta charset="UTF-8">

    <title>Acupuncture</title>
    
    <!-- Main CSS -->
    <link href="/web/css/main.css" rel="stylesheet">
</head>

<body>
    <header>
    	
    	<!-- Titre -->
		<h1 id="titre">Acupuncture</h1>
    	
		<!-- Informations utilisateur Boutons connexion/déconnexion -->
		<form id="formConnexion" action="/authentification" method="POST">
		<ul id="connexion">
			{if isset($smarty.session.pseudo)}
			<li>{$smarty.session.pseudo}</li>
			<li><a href="/deconnexion" id="buttonDeconnexion" class= "buttonHeader">Déconnexion</a></li>
			{else}
			<li><label for="pseudo">Nom :</label></li>
			<li><input type="text" name="pseudo" id="pseudo"> </li>
			<li><label for="password">Mot de Passe :</label></li>
			<li><input type="password" name="password" id="password"> </li>
			<li><button id="buttonConnexion" class= "buttonHeader">Connexion</button></li>
			<li><a href="/inscription" id="buttonInscripton" class= "buttonHeader">Inscription</a></li>
			{/if}
		</ul>
		</form>
    	<!-- Menu de navigation -->
        <nav id="menu">
            	<ul class="nav">
                	<li><a href="/index" >ACCUEIL</a></li>
                	<li><a href="/patho">PATHOLOGIES</a></li>
                    <li><a href="/rssListepathologies">RSS</a></li>
					<li><a href="/webographie">WEBOGRAPHIE</a></li>
				</ul>
        </nav>
    </header>