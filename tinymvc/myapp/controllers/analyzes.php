<?php

/**
 * home.php
 *
 * default application controller
 * @author		Dysta
 */

class Analyzes_Controller extends TinyMVC_Controller
{
    function latest()
    {
        $this->load->model('URL_Model', 'url');
        $data = $this->url->get_latest_url(100);
        $this->view->assign('latest_uri', $data);
        $content = $this->view->fetch('latest_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function about()
    {
        $content = $this->view->fetch('about_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }
}

?>
