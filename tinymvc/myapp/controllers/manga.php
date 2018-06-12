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

    function add()
    {
        if ( isset($_POST['add_manga']) ) :
            if ( 
                isset($_POST['title']) && !empty($_POST['title']) &&
                isset($_POST['date-year']) && isset($_POST['status']) &&
                isset($_POST['date-month']) && isset($_POST['date-day']) && 
                isset($_POST['publish'])  && isset($_POST['owned'])  &&
                isset($_POST['buy']) &&  isset($_POST['price']) &&
                isset($_POST['editor']) && !empty($_POST['editor']) &&
                isset($_POST['type']) && !empty($_POST['type'])
            ) :
                $title      = $_POST['title'];
                $year       = $_POST['date-year'] == 0 ? "0000" : $_POST['date-year'];
                $date       = $year . "-" . $_POST['date-month'] . "-" . $_POST['date-day'];
                $status     = $_POST['status'];
                $publish    = $_POST['publish'];
                $owned      = $_POST['owned'];
                $buy        = $_POST['buy'];
                $price      = $_POST['price'];
                $editor     = $_POST['editor'];
                $type       = $_POST['type'];

                $this->load->model('Manga_Model', 'manga');
                $this->manga->add_manga($title, $date, $status, $publish, $owned, $buy, $price, $editor, $type);
                $this->view->assign('success', true);
            else : 
                $this->view->assign('success', false);
            endif;
        endif;
        $content = $this->view->fetch('manga_add_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');

    }

    function remove()
    {
        $this->load->library('uri');
        $this->load->model('Manga_Model', 'manga');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $success = $this->manga->remove_manga($id);
            $this->view->assign('success', $success);
        endif;
        $content = $this->view->fetch('manga_remove_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function edit()
    {
        $this->load->library('uri');
        $this->load->model('Manga_Model', 'manga');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $manga = $this->manga->get_manga($id);
            $this->view->assign('manga', $manga);
            if ( isset($_POST['edit_manga']) ) :
                if ( 
                    isset($_POST['title']) && !empty($_POST['title']) &&
                    isset($_POST['date-year']) && isset($_POST['status']) &&
                    isset($_POST['date-month']) && isset($_POST['date-day']) && 
                    isset($_POST['publish'])  && isset($_POST['owned'])  &&
                    isset($_POST['buy']) &&  isset($_POST['price']) &&
                    isset($_POST['editor']) && !empty($_POST['editor']) &&
                    isset($_POST['type']) && !empty($_POST['type'])
                ) :
                    $title      = $_POST['title'];
                    $year       = $_POST['date-year'] == 0 ? "0000" : $_POST['date-year'];
                    $date       = $year . "-" . $_POST['date-month'] . "-" . $_POST['date-day'];
                    $status     = $_POST['status'];
                    $publish    = $_POST['publish'];
                    $owned      = $_POST['owned'];
                    $buy        = $_POST['buy'];
                    $price      = $_POST['price'];
                    $editor     = $_POST['editor'];
                    $type       = $_POST['type'];

                    $this->manga->edit_manga($id, $title, $date, $status, $publish, $owned, $buy, $price, $editor, $type);
                    $manga = $this->manga->get_manga($id);
                    $this->view->assign('manga', $manga);
                    $this->view->assign('success', true);
                else : 
                    $this->view->assign('success', false);
                endif;
            endif;
        endif;
        $content = $this->view->fetch('manga_edit_view');
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
}

?>
