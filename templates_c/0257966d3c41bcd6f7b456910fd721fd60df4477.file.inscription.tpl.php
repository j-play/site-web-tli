<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-09 15:09:33
         compiled from "/Users/Baptiste/github/site-web-tli/tpl/pages/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45914901254fc54aed9e4a5-10875272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0257966d3c41bcd6f7b456910fd721fd60df4477' => 
    array (
      0 => '/Users/Baptiste/github/site-web-tli/tpl/pages/inscription.tpl',
      1 => 1425910168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45914901254fc54aed9e4a5-10875272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fc54aedecae2_61261681',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fc54aedecae2_61261681')) {function content_54fc54aedecae2_61261681($_smarty_tpl) {?><main>
	<section id="inscription">
		<h2>Inscription</h2>
		<form id="form_inscription" action="/index.php?page=formInscription" method="POST"> 
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
