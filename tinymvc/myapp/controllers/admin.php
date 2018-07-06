<?php

/**
 * admin.php
 *
 * admin application controller
 * @author Zaxner
 */

class Admin_Controller extends TinyMVC_Controller
{
    function index()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

        $this->load->model('Admin_Model', 'admin');

        $new_tomes_data = $this->admin->get_new_tomes_to_buy();
        $this->view->assign('new_tomes_data', $new_tomes_data);
        $miss_tomes_data = $this->admin->get_nb_missing_tomes();
        $this->view->assign('miss_tomes_data', $miss_tomes_data);
        $total_tomes_data = $this->admin->get_total_tomes();
        $this->view->assign('total_tomes_data', $total_tomes_data);

        $content = $this->view->fetch('admin_index_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    function manga()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

        $this->load->model('Manga_Model', 'manga');

        $data = $this->manga->get_all_manga(200);
        $this->view->assign('mangas', $data);

        $content = $this->view->fetch('admin_manga_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    function manga_add()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

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
        $content = $this->view->fetch('admin_manga_add_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    function manga_edit()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

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
        $content = $this->view->fetch('admin_manga_edit_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    function manga_delete()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

        $this->load->library('uri');
        $this->load->model('Manga_Model', 'manga');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $success = $this->manga->delete_manga($id);
            $this->view->assign('success', $success);
        endif;
        $content = $this->view->fetch('admin_manga_delete_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    function blog()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

        $this->load->model('Blog_Model', 'blog');

        $data = $this->blog->get_all_tickets(600, 50);
        $this->view->assign('tickets', $data);

        $content = $this->view->fetch('admin_blog_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    
    function blog_add()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

        if ( isset($_POST['add_ticket']) ) :
            if ( 
                isset($_POST['title']) && !empty($_POST['title']) &&
                isset($_POST['content']) && !empty($_POST['content'])
            ) :
                $title      = $_POST['title'];
                $content    = $_POST['content'];
                $author     = $_SESSION['username'];

                $this->load->model('Blog_Model', 'blog');
                $this->blog->add_ticket($title, $content, $author);
                $this->view->assign('success', true);
            else:
                $this->view->assign('success', false);
            endif;
        endif;
        $content = $this->view->fetch('admin_blog_add_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    function blog_edit()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

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
                    $author     = $_SESSION['username'];

                    $this->blog->edit_ticket($id, $title, $content, $author);
                    $ticket = $this->blog->get_ticket($id);
                    $this->view->assign('ticket', $ticket);
                    $this->view->assign('success', true);
                else:
                    $this->view->assign('success', false);
                endif;
            endif;
        endif;
        $content = $this->view->fetch('admin_blog_edit_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    function blog_delete()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

        $this->load->library('uri');
        $this->load->model('Blog_Model', 'blog');

        $id = (int) $this->uri->segment(4);
        if ( !empty($id) ) :
            $success = $this->blog->remove_ticket($id);
            $this->view->assign('success', $success);
        endif;
        $content = $this->view->fetch('admin_blog_delete_view');
        $this->view->assign('content', $content);
        $this->view->display('admin_layout_view');
    }

    function login()
    {
        if ( isset($_POST['login']) ) :
            if ( 
                isset($_POST['account']) && !empty($_POST['account']) &&
                isset($_POST['password']) && !empty($_POST['password'])
            ) :
                $this->load->model('Admin_Model', 'admin');
                $user = $this->admin->get_user($_POST['account'], $_POST['password']);
                if ( !empty($user) ) :
                    $_SESSION['id']         = $user['id'];
                    $_SESSION['account']    = $user['account'];
                    $_SESSION['username']   = $user['username'];
                    $_SESSION['logged']     = true;
                    header("Location: " . URL . "admin/index");
                else :
                    $this->view->assign('success', false);
                endif;
            else :
                $this->view->assign('success', false);
            endif;
        endif;
        $this->view->display('admin_login_view');
    }

    function logout()
    {
        if ( !isset($_SESSION['logged']) ) :
            header("Location: " . URL . "admin/login");
            exit(0);
        endif;

        session_destroy();
        header("Location: " . URL . "home/index");
    }

}

?>
