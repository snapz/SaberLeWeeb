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
        $this->load->model('Manga_Model', 'manga');

        $new_tomes_data = $this->manga->get_new_tomes_to_buy();
        $this->view->assign('new_tomes_data', $new_tomes_data);
        $miss_tomes_data = $this->manga->get_nb_missing_tomes();
        $this->view->assign('miss_tomes_data', $miss_tomes_data);
        $total_tomes_data = $this->manga->get_total_tomes();
        $this->view->assign('total_tomes_data', $total_tomes_data);

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
