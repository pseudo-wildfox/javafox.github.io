<?php
    $album = 'https://vk.com/album-186759710_266769713';
    $res = parse_url($album);
    $path = substr($res['path'],6);
    $arr = explode('_', $path);
    $owner_id = $arr[0];
    $album_id = $arr[1];    
?>
