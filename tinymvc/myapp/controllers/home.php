<?php

/**
 * home.php
 *
 * default application controller
 * @author Zaxner
 */

class Home_Controller extends TinyMVC_Controller
{
    function index()
    {
        $content = $this->view->fetch('home_index_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function about()
    {
        $content = $this->view->fetch('home_about_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }
}

?>
