<?php /* Smarty version Smarty-3.1.12, created on 2012-11-14 16:23:45
         compiled from "/data/phpweb/web/templates/classic/user/login.tpl.php" */ ?>
<?php /*%%SmartyHeaderCode:126891916509b19ea5d3a23-75670128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30820cbc8c89871f9febfac29be3755fbc8b36c2' => 
    array (
      0 => '/data/phpweb/web/templates/classic/user/login.tpl.php',
      1 => 1352881423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126891916509b19ea5d3a23-75670128',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509b19ea7a5987_23825375',
  'variables' => 
  array (
    'title' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509b19ea7a5987_23825375')) {function content_509b19ea7a5987_23825375($_smarty_tpl) {?><pre>
<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<<?php ?>?php echo $title."ok";?<?php ?>>

<?php echo print_r($_smarty_tpl->tpl_vars['result']->value);?>

</pre>
<?php }} ?>