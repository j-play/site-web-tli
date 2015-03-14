<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-14 10:15:38
         compiled from "/Users/Baptiste/github/site-web-tli/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3020546455503fab7360465-80211860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9edcdf67baaa6bfd167b491ec320a090c6805d44' => 
    array (
      0 => '/Users/Baptiste/github/site-web-tli/tpl/header.tpl',
      1 => 1426324532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3020546455503fab7360465-80211860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5503fab74d6717_34246123',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503fab74d6717_34246123')) {function content_5503fab74d6717_34246123($_smarty_tpl) {?><!DOCTYPE html>

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
