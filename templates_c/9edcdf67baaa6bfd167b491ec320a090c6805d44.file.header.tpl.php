<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-09 14:35:52
         compiled from "/Users/Baptiste/github/site-web-tli/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134312774154ef1fdd23aed1-80736491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9edcdf67baaa6bfd167b491ec320a090c6805d44' => 
    array (
      0 => '/Users/Baptiste/github/site-web-tli/tpl/header.tpl',
      1 => 1425907998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134312774154ef1fdd23aed1-80736491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef1fdd2a6224_83867128',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef1fdd2a6224_83867128')) {function content_54ef1fdd2a6224_83867128($_smarty_tpl) {?><!DOCTYPE html>

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
