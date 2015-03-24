<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 15:25:43
         compiled from "/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/patho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:421897963550d837f3a27e4-78699106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a583ff01fd248950b682940aa381d5560b69fd' => 
    array (
      0 => '/Users/jonathanplay/Documents/CPE/4IRC/S8/TLI/site-web-tli/tpl/pages/patho.tpl',
      1 => 1427207134,
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
    'listeMeridiens' => 0,
    'meridien' => 0,
    'listePatho' => 0,
    'patho' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d837f3fa514_89104953')) {function content_550d837f3fa514_89104953($_smarty_tpl) {?><main>
	<section id="pathologies">
		<h2 id="titrePatho">Pathologies</h2>
		<form id="filtres" action="/index.php?page=patho" method="POST"> 
			<label for="filtre-tpatho">Type de pathologie : </label>
			<select id="filtre-tpatho" name="filtre-tpatho">
                <option value="null">Aucun</option>
				<option value ="m">Méridien</option>
                <option value ="tf">Organe/Viscère</option>
                <option value ="l">Luo</option>
                <option value ="l2">Merveilleux vaisseaux</option>
                <option value ="j">Jing jin</option>
			</select>
				
			<label for="filtre-meridien">Méridiens : </label>
			<select id="filtre-meridien">
                <option value="null">Aucun</option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['name'] = 'itemMeridien';
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listeMeridiens']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['itemMeridien']['total']);
?>
                <?php $_smarty_tpl->tpl_vars['meridien'] = new Smarty_variable($_smarty_tpl->tpl_vars['listeMeridiens']->value[$_smarty_tpl->getVariable('smarty')->value['section']['itemMeridien']['index']], null, 0);?>
				<option value="$meridien->_code">
                    <?php echo $_smarty_tpl->tpl_vars['meridien']->value->_nom;?>

                </option>
                <?php endfor; endif; ?>
			</select>
				
			<label for="filtre-carac">Caractéristiques : </label>
			<select id="filtre-carac">
                <option value="null">Aucun</option>
				<option value ="p">Plein</option>
                <option value ="c">Chaud</option>
                <option value ="v">Vide</option>
                <option value ="f">Froid</option>
                <option value ="i">Interne</option>
                <option value ="e">Externe</option>
			</select>
				
			<label for="filtre-mot-cle">Mot clé : </label>
			<input id="filtre-mot-cle" type="text"/>
			<input id="valid-filtres" type="submit" name="Valider"/>
		</form>
			
		<div id="corps-patho">
			<div id="liste-fiches">
				<h3>Listes pathologies :</h3>
                <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['name'] = 'itemPatho';
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listePatho']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['itemPatho']['total']);
?>
                <?php $_smarty_tpl->tpl_vars['patho'] = new Smarty_variable($_smarty_tpl->tpl_vars['listePatho']->value[$_smarty_tpl->getVariable('smarty')->value['section']['itemPatho']['index']], null, 0);?>
                  <li id="<?php echo $_smarty_tpl->tpl_vars['patho']->value->_id;?>
">
                      <span><?php echo $_smarty_tpl->tpl_vars['patho']->value->_desc;?>
</span>
                  </li>
                <?php endfor; endif; ?>
                </ul>
			</div>
			<!-- Fiche de la pathologie affichée -->
			<div id="fiche-patho-select">
				<h2>Titre la fiche</h2>
			</div>
		</div>
	</section>
</main><?php }} ?>
