<?php
/*==================================================*/
/*            created by soft-solution.ru           */
/*==================================================*/

    function info_module_mod_24hours(){

        //
        // Описание модуля
        //

        //Заголовок (на сайте)
        $_module['title']        = 'За последние сутки';

        //Название (в админке)
        $_module['name']         = 'За последние сутки';

        //описание
        $_module['description']  = 'Показывает статистику по сайту по нескольким параметрам за сутки';

        //ссылка (идентификатор)
        $_module['link']         = 'mod_24hours';

        //позиция
        $_module['position']     = 'sidebar';

        //автор
        $_module['author']       = 'soft-solution.ru';

        //текущая версия
        $_module['version']      = '1.0';

        //
        // Настройки по-умолчанию
        //
        $_module['config'] = array();
        $_module['config']['show_news'] = 1;
        $_module['config']['cat_id'] = 1;
        $_module['config']['subs'] = 1;
        $_module['config']['show_photos'] = 1;
        $_module['config']['show_blogposts'] = 1;
        $_module['config']['show_clubspost'] = 1;
        $_module['config']['show_boardpost'] = 1;
        $_module['config']['show_users'] = 1;

        return $_module;

    }

// ========================================================================== //

    function install_module_mod_24hours(){

        return true;

    }

// ========================================================================== //

    function upgrade_module_mod_24hours(){

        return true;

    }

// ========================================================================== //

?>