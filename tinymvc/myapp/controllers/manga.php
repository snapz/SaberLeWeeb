<?php

/**
 * manga.php
 *
 * manga controller
 * @author Zaxner
 */

class Manga_Controller extends TinyMVC_Controller
{
    function all()
    {
        $this->load->model('Manga_Model', 'manga');

        $data = $this->manga->get_all_manga(200);
        $this->view->assign('mangas', $data);

        $content = $this->view->fetch('manga_all_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function search()
    {
        if ( isset($_GET['search']) ) :
            $this->load->model('Manga_Model', 'manga');
            $result = $this->manga->search_manga($_GET['search']);
            $this->view->assign('result', $result);
        endif;
        
        $content = $this->view->fetch('manga_search_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function wish_list()
    {
        $this->load->model('Manga_Model', 'manga');

        $data = $this->manga->get_all_wished_manga(200);
        $this->view->assign('mangas', $data);

        $content = $this->view->fetch('manga_wish_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }
}

?>
