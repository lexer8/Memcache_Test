<?php
/* Smarty version 3.1.29, created on 2016-02-18 14:06:23
  from "C:\xampp\htdocs\templates\template-1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5c1cf807412_19968302',
  'file_dependency' => 
  array (
    'd15abf443ac63651d65021a4fe0d68056f298ce8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\template-1.tpl',
      1 => 1455800687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c5c1cf807412_19968302 ($_smarty_tpl) {
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>

    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th{
            background-color: #4CAF50;
            color: #ffffff;
            font-size: 18px;
            height: 40px;
            text-align: center;
            border-bottom: 1px solid #dddddd;
        }
        td{
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #dddddd;
            border-left: 1px solid #dddddd;
        }
        .first{
            width: 5px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:hover{
            background-color: darkgrey;
        }
        #alert {
            padding: 8px 35px 8px 14px;
            margin-bottom: 18px;

            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;

            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

    </style>

</head>
<body onload="changeStyle(el)">
    <h1 id="alert">Данные получены из </h1>
    <hr>
    <div>
        <table>
            <tr>
                <th class="first">№</th>
                <th>Название Книги</th>
                <th>Автор</th>
                <th>Год издания</th>
                <th>Количество страниц</th>
                <th>Цена</th>
            </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['text']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['myId']) ? $_smarty_tpl->tpl_vars['myId'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
            <tr>
                <td class="first"><?php echo $_smarty_tpl->tpl_vars['myId']->value+1;?>
)</td>
                <td style="text-align: left"><strong><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['year'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['page_count'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
 грн.</td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['myId'] = $__foreach_i_0_saved_key;
}
?>
        </table>
    </div>
</body>

<?php echo '<script'; ?>
>
    var el = document.getElementById('alert');

    function changeStyle(el){
        if ("<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"=="DB"){
            el.style.color = '#a94442';
            el.style.background = '#f2dede';
            el.style.border = '1px solid #a94442';
            el.innerHTML += 'Базы Данных:';
        } else {
            el.style.color = '#468847';
            el.style.background = '#dff0d8';
            el.style.border = '1px solid #468847';
            el.innerHTML += 'Кэш-памяти (время хранения 10 сек.): ';
        }
    }
<?php echo '</script'; ?>
>

</html><?php }
}
