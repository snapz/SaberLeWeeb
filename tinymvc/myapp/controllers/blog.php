<?php

/**
 * blog.php
 *
 * blog controller
 * @author Zaxner
 */

class Blog_Controller extends TinyMVC_Controller
{
    function index()
    {
        $this->load->model('Blog_Model', 'blog');
        $data = $this->blog->get_all_tickets(600);
        $this->view->assign('tickets', $data);
        $content = $this->view->fetch('blog_index_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function view()
    {
        $this->load->library('uri');
        $this->load->model('Blog_Model', 'blog');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $ticket = $this->blog->get_ticket($id);
            $this->view->assign('ticket', $ticket);
        endif;
        $content = $this->view->fetch('blog_view_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function add()
    {
        if ( isset($_POST['add_ticket']) ) :
            if ( 
                isset($_POST['title']) && !empty($_POST['title']) &&
                isset($_POST['content']) && !empty($_POST['content'])
            ) :
                $title      = $_POST['title'];
                $content    = $_POST['content'];
                $author     = "Riki"; //TODO: Récuperer le session pseudo

                $this->load->model('Blog_Model', 'blog');
                $this->blog->add_ticket($title, $content, $author);
                $this->view->assign('success', true);
            else:
                $this->view->assign('success', false);
            endif;
        endif;
        $content = $this->view->fetch('blog_add_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function edit()
    {
        $this->load->library('uri');
        $this->load->model('Blog_Model', 'blog');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $ticket = $this->blog->get_ticket($id);
            $this->view->assign('ticket', $ticket);
            if ( isset($_POST['edit_ticket']) ) :
                if ( 
                    isset($_POST['title']) && !empty($_POST['title']) &&
                    isset($_POST['content']) && !empty($_POST['content'])
                ) :
                    $title      = $_POST['title'];
                    $content    = $_POST['content'];
                    $author     = "Riki"; //TODO: Récuperer le session pseudo

                    $this->blog->edit_ticket($id, $title, $content, $author);
                    $ticket = $this->blog->get_ticket($id);
                    $this->view->assign('ticket', $ticket);
                    $this->view->assign('success', true);
                else:
                    $this->view->assign('success', false);
                endif;
            endif;
        endif;
        $content = $this->view->fetch('blog_edit_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }

    function remove()
    {
        $this->load->library('uri');
        $this->load->model('Blog_Model', 'blog');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $success = $this->blog->remove_ticket($id);
            $this->view->assign('success', $success);
        endif;
        $content = $this->view->fetch('blog_remove_view');
        $this->view->assign('content', $content);
        $this->view->display('layout_view');
    }
}

?>
