<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-21 15:43:04
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7093592705501bb8c8c34e9-58110020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d5d0c7a5cf70122fe33e247f54aa8a0fe6b2c77' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/header.tpl',
      1 => 1426178618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7093592705501bb8c8c34e9-58110020',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501bb8ccdf618_93011041',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501bb8ccdf618_93011041')) {function content_5501bb8ccdf618_93011041($_smarty_tpl) {?><!DOCTYPE html>

<html lang="FR">
<head>
    <meta charset="UTF-8">

    <title>Acupuncture</title>
    
    <!-- Main CSS -->
    <link href="/web/css/main.css" media="screen" rel="stylesheet">
    <!-- Main JavaScript -->
    <?php echo '<script'; ?>
 src="/web/js/main.js"><?php echo '</script'; ?>
>
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
            	<ul class="nav navbar-nav">
                	<li><a href="/index.php?page=index" >ACCUEIL</a></li>
                	<li><a href="/index.php?page=patho">PATHOLOGIES</a></li>
				</ul>
        </nav>
    </header><?php }} ?>
