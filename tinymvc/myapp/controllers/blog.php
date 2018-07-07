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
        $this->load->library('uri');
        $this->load->model('Blog_Model', 'blog');

        $page = (int) $this->uri->segment(4);
        $totalPage = $this->blog->get_number_of_blogs_page();
        $data = $this->blog->get_all_tickets($page, 430);

        $this->view->assign('currentPage', ($page == 0) ? 1 : $page);
        $this->view->assign('totalPage', $totalPage);
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
}

?>
