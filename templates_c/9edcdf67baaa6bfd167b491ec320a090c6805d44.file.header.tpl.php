<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 15:02:27
         compiled from "/Users/Baptiste/github/site-web-tli/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134312774154ef1fdd23aed1-80736491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9edcdf67baaa6bfd167b491ec320a090c6805d44' => 
    array (
      0 => '/Users/Baptiste/github/site-web-tli/tpl/header.tpl',
      1 => 1424959321,
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
