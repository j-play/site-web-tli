<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-10 08:31:03
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/Web/site-web-tli/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21277896295524c5c9e2c074-60277555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab5e8f98a2d8258fc02f2cf76f2ef561ceb2bf14' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/Web/site-web-tli/tpl/header.tpl',
      1 => 1428647461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21277896295524c5c9e2c074-60277555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5524c5c9ed2fe5_37874088',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5524c5c9ed2fe5_37874088')) {function content_5524c5c9ed2fe5_37874088($_smarty_tpl) {?><!DOCTYPE html>

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
		<form id="formConnexion" action="/index.php?page=authentification" method="POST">
		<ul id="connexion">
			<?php if (isset($_SESSION['pseudo'])) {?>
			<li><?php echo $_SESSION['pseudo'];?>
</li>
			<li><a href="/index.php?page=deconnexion" id="buttonDeconnexion" class= "buttonHeader">Déconnexion</a></li>
			<?php } else { ?>
			<li><label for="pseudo">Nom :</label></li>
			<li><input type="text" name="pseudo" id="pseudo"> </li>
			<li><label for="password">Mot de Passe :</label></li>
			<li><input type="password" name="password" id="password"> </li>
			<li><button id="buttonConnexion" class= "buttonHeader">Connexion</button></li>
			<li><a href="/index.php?page=inscription" id="buttonInscripton" class= "buttonHeader">Inscription</a></li>
			<?php }?>
		</ul>
		</form>
    	<!-- Menu de navigation -->
        <nav id="menu">
            	<ul class="nav">
                	<li><a href="/index.php?page=index" >ACCUEIL</a></li>
                	<li><a href="/index.php?page=patho">PATHOLOGIES</a></li>
                    <li><a href="/index.php?page=rssListepathologies">RSS</a></li>
					<li><a href="/index.php?page=webographie">WEBOGRAPHIE</a></li>
				</ul>
        </nav>
    </header><?php }} ?>
