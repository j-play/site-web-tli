<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-08 14:20:07
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/patho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208907168454fc4c87d6e128-21006248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a583ff01fd248950b682940aa381d5560b69fd' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/patho.tpl',
      1 => 1424959173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208907168454fc4c87d6e128-21006248',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fc4c87ec6147_12208306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fc4c87ec6147_12208306')) {function content_54fc4c87ec6147_12208306($_smarty_tpl) {?><main>
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
