<?








echo '大小: '.size_file($size)."<br />";

















$jfile=$name;


























$media = dbassoc(dbquery("SELECT * FROM `media_info` WHERE `file` = '".my_esc($jfile)."' AND `size` = '$size' LIMIT 1"));








if ($media!=NULL)








{








echo '许可: '.$media['wh']."pix<br />";








//echo 'Кодек: '.$media['codec']."<br />";








echo '时间: '.$media['lenght']."<br />";








//echo "Битрейт: ".$media['bit']." KBPS<br />";








}








elseif (class_exists('ffmpeg_movie')){








$media = new ffmpeg_movie($file);


























echo '许可: '. $media->GetFrameWidth().'x'.$media->GetFrameHeight()."pix<br />";








//echo 'Кодек: '.$media->getVideoCodec()."<br />";

















if (intval($media->getDuration())>3599)








echo '时间: '.intval($media->getDuration()/3600).":".date('s',fmod($media->getDuration()/60,60)).":".date('s',fmod($media->getDuration(),3600))."<br />";








elseif (intval($media->getDuration())>59)








echo '时间: '.intval($media->getDuration()/60).":".date('s',fmod($media->getDuration(),60))."<br />";








else








echo '时间: '.intval($media->getDuration())." 秒<br />";








//echo "Битрейт: ".ceil(($media->getBitRate())/1024)." KBPS<br />";








if (intval($media->getDuration())>3599)








dbquery("INSERT INTO `media_info` (`file`, `size`, `lenght`, `bit`, `codec`, `wh`) values('".my_esc($jfile)."', '$size', '".intval($media->getDuration()/3600).":".date('s',fmod($media->getDuration()/60,60)).":".date('s',fmod($media->getDuration(),3600))."', '".ceil(($media->getBitRate())/1024)."', '".$media->getVideoCodec()."', '".$media->GetFrameWidth().'x'.$media->GetFrameHeight()."')");








elseif (intval($media->getDuration())>59)








dbquery("INSERT INTO `media_info` (`file`, `size`, `lenght`, `bit`, `codec`, `wh`) values('".my_esc($jfile)."', '$size', '".intval($media->getDuration()/60).":".date('s',fmod($media->getDuration(),60))."', '".ceil(($media->getBitRate())/1024)."', '".$media->getVideoCodec()."', '".$media->GetFrameWidth().'x'.$media->GetFrameHeight()."')");








else








dbquery("INSERT INTO `media_info` (`file`, `size`, `lenght`, `bit`, `codec`, `wh`) values('".my_esc($jfile)."', '$size', '".intval($media->getDuration())." 秒', '".ceil(($media->getBitRate())/1024)."', '".$media->getVideoCodec()."', '".$media->GetFrameWidth().'x'.$media->GetFrameHeight()."')");








}








else echo '上膛了: '.vremja($post['time'])."<br />";
