<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 16:34:31
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205989159655118407c6d530-06692022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91592ebaef398e3d149e63a55a593ffae12a6987' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/inscription.tpl',
      1 => 1426339547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205989159655118407c6d530-06692022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55118407d9a0f5_04992042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55118407d9a0f5_04992042')) {function content_55118407d9a0f5_04992042($_smarty_tpl) {?><main>
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
