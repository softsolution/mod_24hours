<?php
/*==================================================*/
/*            created by soft-solution.ru           */
/*==================================================*/

    function info_module_mod_24hours(){

        //
        // �������� ������
        //

        //��������� (�� �����)
        $_module['title']        = '�� ��������� �����';

        //�������� (� �������)
        $_module['name']         = '�� ��������� �����';

        //��������
        $_module['description']  = '���������� ���������� �� ����� �� ���������� ���������� �� �����';

        //������ (�������������)
        $_module['link']         = 'mod_24hours';

        //�������
        $_module['position']     = 'sidebar';

        //�����
        $_module['author']       = 'soft-solution.ru';

        //������� ������
        $_module['version']      = '1.0';

        //
        // ��������� ��-���������
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