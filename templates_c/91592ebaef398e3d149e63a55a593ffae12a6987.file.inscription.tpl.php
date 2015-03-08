<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-08 15:54:47
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19192643154fc62b752c665-33335871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91592ebaef398e3d149e63a55a593ffae12a6987' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/inscription.tpl',
      1 => 1425826469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19192643154fc62b752c665-33335871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fc62b7580b86_02245376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fc62b7580b86_02245376')) {function content_54fc62b7580b86_02245376($_smarty_tpl) {?><main>
	<section id="inscription">
		<h2>Inscription</h2>
		<form id="form_inscription" action="/index.php?page=formInscription"> 
			<div class="form_col">
				<label class="form_col" for="input_pseudo">Pseudo : </label>
				<input class="form_col" type="text" id="input_pseudo"/>
			</div>
			
			<div class="form_col">	
				<label class="form_col" for="input_mdp">Mot de Passe : </label>
				<input class="form_col" type="password" id="input_mdp"/>
			</div>
				
			<div class="form_col">
				<label class="form_col" for="input_mail">Adresse mail : </label>
				<input class="form_col" type="email" id="input_mail"/>
			</div>

			<input class="form_col" type="submit" name="Valider"/>
		</form>
	</section>
</main><?php }} ?>
