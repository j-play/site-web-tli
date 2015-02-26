<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 15:01:28
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/TLI/site-web-tli/tpl/pages/patho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91301436354ef267bce5f24-21430331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd5fb3557f6c81e2a3cc0c948d9ee2682a2bc81b' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/TLI/site-web-tli/tpl/pages/patho.tpl',
      1 => 1424959173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91301436354ef267bce5f24-21430331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef267bd345c8_10975127',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef267bd345c8_10975127')) {function content_54ef267bd345c8_10975127($_smarty_tpl) {?><main>
	<section id="pathologies">
		<h2>Pathologies</h2>
		<form id="filtres"> 
			<label for="filtre-tpatho">Type de pathologie : </label>
			<select id="filtre-tpatho">
				<option>Type pathologie 1</option>
				<option>Type pathologie 2</option>
			</select>
				
			<label for="filtre-meridien">Méridiens : </label>
			<select id="filtre-meridien">
				<option>Méridien 1</option>
				<option>Méridien 2</option>
			</select>
				
			<label for="filtre-carac">Caractéristiques : </label>
			<select id="filtre-carac">
				<option>Caractéristique 1</option>
				<option>Caractéristique 2</option>
			</select>
				
			<label for="filtre-mot-cle">Mot clé : </label>
			<input id="filtre-mot-cle" type="text"/>
			<br/>
			<input id="valid-filtres" type="submit" name="Valider"/>
		</form>
			
		<div id="corps-patho">
			<div id="liste-fiches">
				Listes pathologies :
				<br/>
				<ul>
					<li>Fiche 1</li>
					<li>Fiche 2</li>
				</ul>
			</div>
			<!-- Fiche de la pathologie affichée -->
			<div id="fiche-patho-select">
				<h2>Titre la fiche</h2>
			</div>
		</div>
	</section>
</main><?php }} ?>
