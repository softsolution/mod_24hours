<?php

function mod_24hours($module_id){

    $inCore     = cmsCore::getInstance();
    $inDB       = cmsDatabase::getInstance();
    $inPage     = cmsPage::getInstance();

    $cfg        = $inCore->loadModuleConfig($module_id);

    if (!isset($cfg['show_news'])) {$cfg['show_news'] = 1;}
    if (!isset($cfg['cat_id'])) {$cfg['show_news'] = 1;}
    if (!isset($cfg['subs'])) {$cfg['subs'] = 1;}
    if (!isset($cfg['show_photos'])) {$cfg['show_photos'] = 1;}
    if (!isset($cfg['show_blogposts'])) {$cfg['show_blogposts'] = 1;}
    if (!isset($cfg['show_clubspost'])) {$cfg['show_clubspost'] = 1;}
    if (!isset($cfg['show_boardpost'])) {$cfg['show_boardpost'] = 1;}
    if (!isset($cfg['show_users'])) {$cfg['show_users'] = 1;}

    $col = array();
    $today = date("Y-m-d H:i:s");

    if ($cfg['show_news'] == 1){

        if ($cfg['cat_id'] != '-1') {
            if (!$cfg['subs']){
                    //select from category
                    $catsql = ' AND con.category_id = '.$cfg['cat_id'];
            } else {
                    //select from category and subcategories
                    $rootcat = $inDB->get_fields('cms_category', "id='{$cfg['cat_id']}'", 'NSLeft, NSRight');
                    if(!$rootcat) { return false; }
                    $catsql = "AND (cat.NSLeft >= {$rootcat['NSLeft']} AND cat.NSRight <= {$rootcat['NSRight']})";
            }

        } else { $catsql = '';}

        $sql = "SELECT 1 FROM cms_content con LEFT JOIN cms_category cat ON cat.id = con.category_id WHERE DATEDIFF(NOW(), con.pubdate) = 0 AND con.published = 1 AND con.is_arhive = 0 " .$catsql;
        $result = $inDB->query($sql) ;
        $col['news'] = $inDB->num_rows($result);

    }

    if ($cfg['show_photos'] == 1){

        $sql = "SELECT 1 FROM cms_photo_files WHERE DATEDIFF(NOW(), pubdate) = 0 AND published = 1";
        $result = $inDB->query($sql) ;
        $col['photos'] = $inDB->num_rows($result);

    }

    if ($cfg['show_blogposts'] == 1){
        $sql = "SELECT 1 FROM cms_blog_posts p LEFT JOIN cms_blogs b ON b.id = p.blog_id WHERE DATEDIFF(NOW(), p.pubdate) = 0 AND b.owner = 'user' AND p.published = 1";
        $result = $inDB->query($sql) ;
        $col['blogposts'] = $inDB->num_rows($result);
    }

    if ($cfg['show_clubspost'] == 1){
        $sql = "SELECT 1 FROM cms_blog_posts p LEFT JOIN cms_blogs b ON b.id = p.blog_id WHERE DATEDIFF(NOW(), p.pubdate) = 0 AND b.owner = 'club' AND p.published = 1";
        $result = $inDB->query($sql) ;
        $col['clubspost'] = $inDB->num_rows($result);
    }

    if ($cfg['show_boardpost'] == 1){
        $sql = "SELECT 1 FROM cms_board_items i WHERE DATEDIFF(NOW(), i.pubdate) = 0 AND i.published = 1";
        $result = $inDB->query($sql) ;
        $col['boardpost'] = $inDB->num_rows($result);
    }

    if ($cfg['show_users'] == 1){
        $sql = "SELECT 1 FROM cms_users u WHERE DATEDIFF(NOW(), u.regdate) = 0 AND u.is_deleted = 0 AND u.is_locked = 0";
        $result = $inDB->query($sql) ;
        $col['users'] = $inDB->num_rows($result);

    }

    $smarty = $inCore->initSmarty('modules', 'mod_24hours.tpl');
    $smarty->assign('cfg', $cfg);
    $smarty->assign('col', $col);
    $smarty->display('mod_24hours.tpl');

    return true;

}
?>
