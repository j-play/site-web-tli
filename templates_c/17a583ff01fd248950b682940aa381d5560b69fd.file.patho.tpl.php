<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-22 00:33:57
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/patho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:421897963550d837f3a27e4-78699106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a583ff01fd248950b682940aa381d5560b69fd' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/patho.tpl',
      1 => 1426980836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '421897963550d837f3a27e4-78699106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550d837f3fa514_89104953',
  'variables' => 
  array (
    'listePatho' => 0,
    'patho' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d837f3fa514_89104953')) {function content_550d837f3fa514_89104953($_smarty_tpl) {?><main>
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
			<input id="valid-filtres" type="submit" name="Valider"/>
		</form>
			
		<div id="corps-patho">
			<div id="liste-fiches">
				<h3>Listes pathologies :</h3>
                <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['name'] = 'listePatho';
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listePatho']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['listePatho']['total']);
?>
                <?php $_smarty_tpl->tpl_vars['patho'] = new Smarty_variable($_smarty_tpl->tpl_vars['listePatho']->value[$_smarty_tpl->getVariable('smarty')->value['section']['listePatho']['index']], null, 0);?>
                  <li>
                      <span><a href=""><?php echo $_smarty_tpl->tpl_vars['patho']->value->_desc;?>
</a></span>
                  </li>
                <?php endfor; endif; ?>
			</div>
			<!-- Fiche de la pathologie affichée -->
			<div id="fiche-patho-select">
				<h2>Titre la fiche</h2>
			</div>
		</div>
	</section>
</main><?php }} ?>
