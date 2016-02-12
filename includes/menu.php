<?php
    $menu = array(
        'home'  => array('text'=>'HOME',  'url'=>'index.php'),
        'sports'  => array('text'=>'SPORTS',  'url'=>'sports.php'),
        'horses' => array('text'=>'HORSES', 'url'=>'horses.php'),
        'dfs' => array('text'=>'DFS', 'url'=>'dfs.php'),
    );

    $html = "<ul>\n";
    foreach($menu as $item) {
        $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>\n";
    }
    $html .= "</ul>\n";
    echo($html);
?>