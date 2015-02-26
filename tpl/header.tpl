<!DOCTYPE html>

<html lang="FR">
<head>
    <meta charset="UTF-8">

    <title>Acupuncture</title>
    
    <!-- Main CSS -->
    <link href="/web/css/main.css" media="screen" rel="stylesheet">
    <!-- Main JavaScript -->
    <script src="/web/js/main.js"></script>
</head>

<body>
    <header>
    	
    	<!-- Titre -->
		<h1 id="titre">Acupuncture</h1>
    	
		<!-- Informations utilisateur Boutons connexion/déconnexion -->
		<form id="formConnexion">
		<ul id="connexion">
			{if isset($smarty.session.username)}
			<li>Utilisateur anonyme</li>
			{else}
			<li><label for="name">Nom :</label></li>
			<li><input type="text" name="name"> </li>
			<li><label for="password">Mot de Passe :</label></li>
			<li><input type="password" name="password"> </li>
			<li><button id="buttonConnexion">Connexion</button></li>
			{/if}
		</ul>
		</form>
    	<!-- Menu de navigation -->
        <nav id="menu">
            	<ul class="nav navbar-nav">
                	<li><a href="/index.php?page=index" >ACCUEIL</a></li>
                	<li><a href="/index.php?page=patho">PATHOLOGIES</a></li>
				</ul>
        </nav>
    </header>