
CREATE TABLE IF NOT EXISTS `all_accesses` (
  `type` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `all_accesses` (`type`, `name`) VALUES
('adm_panel_show', '管理面板-访问管理面板部分'),
('loads_file_upload', '下载-上传文件'),
('loads_dir_mesto', '下载-移动文件夹'),
('loads_dir_delete', '下载-删除文件夹'),
('loads_dir_rename', '下载-重命名文件夹'),
('loads_dir_create', '下载-创建文件夹'),
('loads_file_edit', '下载-文件参数'),
('loads_file_delete', '下载-删除文件'),
('loads_unzip', '下载-解压缩ZIP'),
('lib_stat_zip', '图书馆-上载文章至ZIP'),
('lib_stat_txt', '图书馆-上传文章到txt'),
('lib_stat_create', '图书馆-创作文章'),
('lib_dir_delete', '库-删除文件夹'),
('lib_dir_mesto', '库-移动文件夹'),
('lib_dir_edit', '库-编辑文件夹'),
('lib_dir_create', '库-创建文件夹'),
('lib_stat_delete', '图书馆-删除文章'),
('votes_settings', '投票-结束/删除'),
('votes_create', '投票-创作'),
('guest_clear', '客人清洁'),
('guest_delete', '访客-删除帖子'),
('obmen_dir_delete', '交换器-删除文件夹'),
('obmen_dir_edit', '交换器-文件夹管理'),
('obmen_dir_create', '交换器-创建文件夹'),
('obmen_file_delete', '交换器-删除文件'),
('obmen_file_edit', '交换器-文件编辑'),
('obmen_komm_del', '交换-删除注释'),
('foto_foto_edit', '照片库-编辑/删除照片'),
('foto_alb_del', '照片库-删除相册'),
('foto_komm_del', '照片库-删除评论'),
('forum_razd_create', '论坛-创建部分'),
('forum_for_delete','论坛-删除子论坛в'),
('forum_for_edit','论坛-编辑子论坛'),
('forum_for_create','论坛-创建子论坛'),
('forum_razd_edit','论坛-版块管理'),
('adm_info','管理面板-一般资料'),
('forum_them_edit','论坛-编辑主题'),
('forum_them_del','论坛-删除主题'),
('forum_post_ed','论坛编辑帖子'),
('chat_clear','Chat-clearing'),
('chat_room', '聊天室管理'),
('adm_statistic','管理统计'),
('adm_banlist','管理员禁止列表'),
('adm_menu','管理面板-主菜单'),
('adm_news','管理新闻'),
('adm_rekl','管理-网站广告'),
('adm_set_sys','管理面板-系统设置'),
('adm_set_loads','管理面板-加载中心设置'),
('adm_set_user','管理面板-用户设置'),
('adm_set_chat','管理面板-聊天设置'),
('adm_set_forum','管理面板-论坛设置'),
('adm_set_foto', '管理面板-照片库设置'),
('adm_forum_sinc', '管理面板-论坛表的同步'),
('adm_themes', '管理面板-设计主题'),
('adm_log_read', '管理面板-管理操作日志'),
('adm_log_delete', '管理面板-删除日志'),
('adm_mysql', '管理面板-MySQL查询!!!'),
('adm_ref', '管理小组-转介'),
('adm_show_adm', '管理面板-管理列表'),
('adm_ip_edit', '管理面板-编辑IP操作员'),
('adm_ban_ip', '管理面板-ip禁令'),
('adm_accesses', '用户组权限 !!!'),
('user_delete', '用户-删除'),
('user_mass_delete', '用户-大规模删除'),
('user_ban_set', '用户被禁止'),
('user_ban_unset', '用户-取消禁令'),
('user_prof_edit', '用户-配置文件编辑'),
('user_collisions', '用户-昵称匹配'),
('user_show_ip', '用户-显示IP'),
('user_show_ua', '用户-用户-代理显示'),
('user_show_add_info', '用户-显示其他信息'),
('guest_show_ip', '来宾-IP显示'),
('user_change_group', '用户-更改权限组'),
('user_ban_set_h', '用户被禁止(最多1天)'),
('forum_post_close', '论坛-在封闭主题中写作的能力'),
('user_change_nick', '用户-昵称更改'),
('loads_file_import', '下载-导入文件'),
('adm_lib_repair', '恢复库'),
('notes_edit', '日记-编辑'),
('notes_delete', '日记-删除');
