<?
/*
=======================================
私隐网页Dcms-社交
作者：探索者
---------------------------------------
此脚本是根据许可证分发的
Dcms-社交引擎。
使用时，指定一个链接到
的。网站http://dcms-social.ru
---------------------------------------
Контакты
ICQ: 587863132
http://dcms-social.ru
=======================================
*/
include_once '../../sys/inc/start.php';
include_once '../../sys/inc/compress.php';
include_once '../../sys/inc/sess.php';
include_once '../../sys/inc/home.php';
include_once '../../sys/inc/settings.php';
include_once '../../sys/inc/db_connect.php';
include_once '../../sys/inc/ipua.php';
include_once '../../sys/inc/fnc.php';
include_once '../../sys/inc/user.php';
only_reg();
$set['title']='隐私设置';
include_once '../../sys/inc/thead.php';
title();
$userSet = dbarray(dbquery("SELECT * FROM `user_set` WHERE `id_user` = '".$user['id']."' LIMIT 1"));
if (isset($_POST['save'])){
 // Просмотр стр
if (isset($_POST['privat_str']) && ($_POST['privat_str']==0 || $_POST['privat_str']==1 || $_POST['privat_str']==2))
{
dbquery("UPDATE `user_set` SET `privat_str` = '".intval($_POST['privat_str'])."' WHERE `id_user` = '$user[id]'");
}
 // Сообщения
if (isset($_POST['privat_mail']) && ($_POST['privat_mail']==0 || $_POST['privat_mail']==1 || $_POST['privat_mail']==2))
{
dbquery("UPDATE `user_set` SET `privat_mail` = '".intval($_POST['privat_mail'])."' WHERE `id_user` = '$user[id]'");
}
$_SESSION['message'] = 'Изменения успешно приняты';
header('Location: settings.privacy.php');
exit;
}
err();
aut();
echo "<div id='comments' class='menus'>";
echo "<div class='webmenu'>";
echo "<a href='/user/info/settings.php'>普通</a>";
echo "</div>"; 
echo "<div class='webmenu last'>";
echo "<a href='/user/tape/settings.php'>录音带</a>";
echo "</div>"; 
echo "<div class='webmenu last'>";
echo "<a href='/user/discussions/settings.php'>讨论</a>";
echo "</div>"; 
echo "<div class='webmenu last'>";
echo "<a href='/user/notification/settings.php'>通知书</a>";
echo "</div>"; 
echo "<div class='webmenu last'>";
echo "<a href='/user/info/settings.privacy.php' class='activ'>私隐保护</a>";
echo "</div>"; 
echo "<div class='webmenu last'>";
echo "<a href='/user/info/secure.php' >密码</a>";
echo "</div>"; 
echo "</div>";
echo "<form action='?' method=\"post\">";
 // Просмотр стр
echo "<div class='mess'>";
echo "查看我的网页";
echo "</div>";
echo "<div class='nav1'>";
echo "<input name='privat_str' type='radio' ".($userSet['privat_str'] == 1 ? ' checked="checked"' : null)." value='1' /> 全部 ";
echo "<input name='privat_str' type='radio' ".($userSet['privat_str'] == 2 ? ' checked="checked"' : null)." value='2' /> 朋友 ";
echo "<input name='privat_str' type='radio' ".($userSet['privat_str'] == 0 ? ' checked="checked"' : null)." value='0' /> 只有我 ";
echo "</div>";
 // Сообщения
echo "<div class='mess'>";
echo "他们可以给我写私信";
echo "</div>";
echo "<div class='nav1'>";
echo "<input name='privat_mail' type='radio' ".($userSet['privat_mail'] == 1 ? ' checked="checked"' : null)." value='1' /> 全部 ";
echo "<input name='privat_mail' type='radio' ".($userSet['privat_mail'] == 2 ? ' checked="checked"' : null)." value='2' /> 朋友 ";
echo "<input name='privat_mail' type='radio' ".($userSet['privat_mail'] == 0 ? ' checked="checked"' : null)." value='0' /> 只有我 ";
echo "</div>";
echo "<div class='main'>";
echo "<input type='submit' name='save' value='保存' />";
echo "</div>";
echo "</form>";
echo "<div class=\"foot\">";
echo "<img src='/style/icons/str2.gif' alt='*'> <a href='/info.php?id=$user[id]'>$user[nick]</a> | ";
echo '<b>私隐保护</b>';
echo "</div>";
include_once '../../sys/inc/tfoot.php';
?>