<?php
include_once '../sys/inc/start.php';
include_once '../sys/inc/compress.php';
include_once '../sys/inc/sess.php';
include_once '../sys/inc/home.php';
include_once '../sys/inc/settings.php';
include_once '../sys/inc/db_connect.php';
include_once '../sys/inc/ipua.php';
include_once '../sys/inc/fnc.php';
$banpage=true;
include_once '../sys/inc/user.php';
//only_reg();
$set['title']='规则';
include_once '../sys/inc/thead.php';
title();
err();
aut();
if ((!isset($_SESSION['refer']) || $_SESSION['refer']==NULL)
&& isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!=NULL &&
!preg_match('#info\.php#',$_SERVER['HTTP_REFERER']))
$_SESSION['refer']=str_replace('&','&amp;',preg_replace('#^http://[^/]*/#','/', $_SERVER['HTTP_REFERER']));
if (is_file(H.'sys/add/rules.txt'))
{
$f=file(H.'sys/add/rules.txt');
$k_page=k_page(count($f),$set['p_str']);
$page=page($k_page);
$start=$set['p_str']*($page-1);
$end=$set['p_str']*$page;
for ($i=$start;$i<$end && $i<count($f);$i++)
echo ($i+1).') '.trim(stripcslashes(htmlspecialchars($f[$i])))."<br />";
if ($k_page>1)str("?",$k_page,$page); // 输出页数
}
if(isset($_SESSION['refer']) && $_SESSION['refer']!=NULL && otkuda($_SESSION['refer']))
{
echo "<div class=\"foot\">";
echo "&laquo;<a href='$_SESSION[refer]'>".otkuda($_SESSION['refer'])."</a><br />";
echo "</div>";
}
include_once '../sys/inc/tfoot.php';
