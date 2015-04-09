<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 18:28:11
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/Web/site-web-tli/tpl/pages/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17929400435526a89b8316a7-99658466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74dfd6e456498aab50939529749fc5d7ff72a761' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/Web/site-web-tli/tpl/pages/inscription.tpl',
      1 => 1428356659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17929400435526a89b8316a7-99658466',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526a89b890314_13021207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526a89b890314_13021207')) {function content_5526a89b890314_13021207($_smarty_tpl) {?><main>
	<section id="inscription">
		<h2>Inscription</h2>
		<form id="form_inscription" action="/index.php?page=traitementInscription" method="POST"> 
			<div class="form_col">
				<label class="form_col" for="input_pseudo">Pseudo : </label>
				<input class="form_col" type="text" id="input_pseudo" name="input_pseudo"/>
			</div>
			
			<div class="form_col">	
				<label class="form_col" for="input_mdp">Mot de Passe : </label>
				<input class="form_col" type="password" id="input_mdp" name="input_mdp"/>
			</div>
				
			<div class="form_col">
				<label class="form_col" for="input_mail">Adresse mail : </label>
				<input class="form_col" type="email" id="input_mail" name="input_mail"/>
			</div>

			<input class="form_col" type="submit" name="Valider"/>
		</form>
	</section>
</main><?php }} ?>
