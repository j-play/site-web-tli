<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 16:36:10
         compiled from "/Users/Baptiste/github/site-web-tli/tpl/pages/patho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:934913891550e8e3bbe97c9-17747377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd95cd324958115e54b829a718485ec57877e9f' => 
    array (
      0 => '/Users/Baptiste/github/site-web-tli/tpl/pages/patho.tpl',
      1 => 1427211365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934913891550e8e3bbe97c9-17747377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550e8e3bd03cb3_78512027',
  'variables' => 
  array (
    'listeMeridiens' => 0,
    'meridien' => 0,
    'listePatho' => 0,
    'patho' => 0,
    'pathologie' => 0,
    'symptome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550e8e3bd03cb3_78512027')) {function content_550e8e3bd03cb3_78512027($_smarty_tpl) {?><main>
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
			<select id="filtre-meridien" name="filtre-meridien">
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
			<select id="filtre-carac" name="filtre-carac">
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
                      <a href="/index.php?page=patho&amp;idPatho=<?php echo $_smarty_tpl->tpl_vars['patho']->value->_id;?>
"><?php echo $_smarty_tpl->tpl_vars['patho']->value->_desc;?>
</a>
                  </li>
                <?php endfor; endif; ?>
                </ul>
			</div>
			<!-- Fiche de la pathologie affichée -->
			<div id="fiche-patho-select">
                <?php if (isset($_smarty_tpl->tpl_vars['pathologie']->value)) {?>
				<h2><?php echo $_smarty_tpl->tpl_vars['pathologie']->value->_desc;?>
</h2>
                <p>Méridien: <?php echo $_smarty_tpl->tpl_vars['pathologie']->value->_meridien->_nom;?>
</p>
                <h3>Liste des symptômes:</h3>
                <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['name'] = 'itemSymptome';
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pathologie']->value->_listeSymptomes) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['itemSymptome']['total']);
?>
                <?php $_smarty_tpl->tpl_vars['symptome'] = new Smarty_variable($_smarty_tpl->tpl_vars['pathologie']->value->_listeSymptomes[$_smarty_tpl->getVariable('smarty')->value['section']['itemSymptome']['index']], null, 0);?>
                  <li>
                    <?php echo $_smarty_tpl->tpl_vars['symptome']->value->_desc;?>

                  </li>
                <?php endfor; endif; ?>
                </ul> 
                <?php }?>               
			</div>
		</div>
	</section>
</main><?php }} ?>
