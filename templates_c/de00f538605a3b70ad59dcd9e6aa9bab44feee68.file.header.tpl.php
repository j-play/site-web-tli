<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 15:01:28
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/TLI/site-web-tli/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208106571354ef22562de307-87473820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de00f538605a3b70ad59dcd9e6aa9bab44feee68' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/TLI/site-web-tli/tpl/header.tpl',
      1 => 1424959173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208106571354ef22562de307-87473820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef225634b707_47779113',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef225634b707_47779113')) {function content_54ef225634b707_47779113($_smarty_tpl) {?><!DOCTYPE html>

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
		<ul id="connexion">
			<li>Utilisateur anonyme</li>
			<li><button class="btn btn-primary">Connexion</button></li>
		</ul>
    	
    	<!-- Menu de navigation -->
        <nav id="menu">
            	<ul class="nav navbar-nav">
                	<li><a href="/index.php?page=index" >Accueil</a></li>
                	<li><a href="/index.php?page=patho">Pathologies</a></li>
				</ul>
        </nav>
    </header><?php }} ?>
