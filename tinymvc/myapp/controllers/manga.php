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
        $this->load->model('Query_Model', 'query');
        $data = $this->query->get_all_manga(200);
        $this->view->assign('mangas', $data);
        $content = $this->view->fetch('all_view');
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

                $this->load->model('Query_Model', 'query');
                $this->query->add_manga($title, $date, $status, $publish, $owned, $buy, $price, $editor, $type);
                $this->view->assign('success', true);
            else : 
                $this->view->assign('success', false);
            endif;
        endif;
        $content = $this->view->fetch('add_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');

    }

    function remove()
    {
        $this->load->library('uri');
        $this->load->model('Query_Model', 'query');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $success = $this->query->remove_manga($id);
            $this->view->assign('success', $success);
        endif;
        $content = $this->view->fetch('remove_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function edit()
    {
        $this->load->library('uri');
        $this->load->model('Query_Model', 'query');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $manga = $this->query->get_manga($id);
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

                    $this->query->edit_manga($id, $title, $date, $status, $publish, $owned, $buy, $price, $editor, $type);
                    $this->view->assign('success', true);
                else : 
                    $this->view->assign('success', false);
                endif;
            endif;
        endif;
        $content = $this->view->fetch('edit_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }
}

?>
