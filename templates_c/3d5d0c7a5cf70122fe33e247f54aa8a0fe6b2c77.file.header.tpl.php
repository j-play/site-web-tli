<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-09 17:16:12
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76188350254f332c0e1d277-36915323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d5d0c7a5cf70122fe33e247f54aa8a0fe6b2c77' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/header.tpl',
      1 => 1425914427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76188350254f332c0e1d277-36915323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f332c13bdd62_92096465',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f332c13bdd62_92096465')) {function content_54f332c13bdd62_92096465($_smarty_tpl) {?><!DOCTYPE html>

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
		<form id="formConnexion" action="/index.php?page=connexion" method="POST">
		<ul id="connexion">
			<?php if (isset($_SESSION['username'])) {?>
			<li><?php echo $_SESSION['username'];?>
</li>
			<li><a href="/index.php?page=deconnexion" id="buttonDeconnexion" class= "buttonHeader">Déconnexion</a></li>
			<?php } else { ?>
			<li><label for="username">Nom :</label></li>
			<li><input type="text" name="username" id="username"> </li>
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
