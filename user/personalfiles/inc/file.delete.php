<?
/*
=======================================
DCMS-Social 用户个人文件
作者：探索者
---------------------------------------
此脚本在许可下被破坏
DCMS-Social 引擎。
使用时，指定引用到
网址 http://dcms-social.ru
---------------------------------------
接点
ICQ：587863132
http://dcms-social.ru
=======================================
*/
// Удаляем файл
if (isset($_GET['delete'])) {
	if (!isset($_GET['page'])) $_GET['page'] = 1;
	if (isset($_GET['ok'])) {
		dbquery("DELETE FROM `user_music` WHERE `id_file` = '$file_id[id]' AND `dir` = 'down'");
		dbquery("DELETE FROM `downnik_files` WHERE `id` = '$file_id[id]'");
		unlink(H . 'files/down/' . $file_id['id'] . '.dat');
		unlink(H . 'files/screens/128/' . $file_id['id'] . '.gif');
		unlink(H . 'files/screens/128/' . $file_id['id'] . '.png');
		unlink(H . 'files/screens/128/' . $file_id['id'] . '.jpg');
		unlink(H . 'files/screens/128/' . $file_id['id'] . '.jpeg');
		unlink(H . 'files/screens/48/' . $file_id['id'] . '.gif');
		unlink(H . 'files/screens/48/' . $file_id['id'] . '.png');
		unlink(H . 'files/screens/48/' . $file_id['id'] . '.jpg');
		unlink(H . 'files/screens/48/' . $file_id['id'] . '.jpeg');
		unlink(H . 'files/down/' . $file_id['id'] . '.dat');
		$_SESSION['message'] = '该文件已成功删除';
		header("Location: ?page=" . intval($_GET['page']) . "");
		exit;
	}
	echo '<div class="mess">';
	echo '删除文件 ' . htmlspecialchars($file_id['name']) . '?<br />';
	echo '</div>';
	echo '<div class="main">';
	echo '[<a href="?page=' . intval($_GET['page']) . '&amp;id_file=' . $file_id['id'] . '&amp;delete&amp;ok"><img src="/style/icons/ok.gif" alt="*"> 是的</a>] ';
	echo '[<a href="?page=' . intval($_GET['page']) . '&amp;id_file=' . $file_id['id'] . '"><img src="/style/icons/delete.gif" alt="*"> 取消</a>]';
	echo '</div>';
	include_once '../../sys/inc/tfoot.php';
	exit;
}
