<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 17:02:05
         compiled from "/Users/Baptiste/github/site-web-tli/tpl/pages/patho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199320615554ef437d3b2db3-37040283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd95cd324958115e54b829a718485ec57877e9f' => 
    array (
      0 => '/Users/Baptiste/github/site-web-tli/tpl/pages/patho.tpl',
      1 => 1424959321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199320615554ef437d3b2db3-37040283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef437d40a8a7_82929444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef437d40a8a7_82929444')) {function content_54ef437d40a8a7_82929444($_smarty_tpl) {?><main>
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
