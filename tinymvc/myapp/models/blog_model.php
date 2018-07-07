<?php

Class Blog_Model extends TinyMVC_Model
{
    function get_all_tickets($page, $max_carac)
    {
        $totalPage  = self::get_number_of_blogs_page();

        if(isset($page) && !empty($page) && $page > 0){
            $actualPage = ($page > $totalPage) ? $totalPage : $page;
        } else {
            $actualPage = 1;
        }

        $start = ($actualPage - 1) * TICKETS_PER_PAGE;
        ($start < 0) ? $start*=-1 : $start;
        
        $this->db->select('*');
        $this->db->from('tickets');
        $this->db->orderby('id DESC');
        $this->db->limit(TICKETS_PER_PAGE, $start);
        $tickets = $this->db->query_all();
        $data = array();
        foreach($tickets as $key => $ticket){
            $data[$key]['id']       = $ticket['id'];
            $data[$key]['title']    = $ticket['title'];
            if ( strlen($ticket['content']) > $max_carac ) :
                $content = substr($ticket['content'], 0, $max_carac) . "...";
            else :
                $content = $ticket['content'];
            endif;
            $data[$key]['content']  = $content;
            $data[$key]['date']     = $ticket['date'];
            $data[$key]['author']   = $ticket['author'];
        }
        return $data;
    }

    function get_ticket($id)
    {
        $this->db->select('*');
        $this->db->from('tickets');
        $this->db->where('id', $id);
        $ticket = $this->db->query_one();
        return $ticket;
    }

    function add_ticket($title, $content, $author)
    {
        return $this->db->insert('tickets', array(
            'title'     => $title,
            'content'   => $content,
            'author'    => $author,
            'date'      => date('Y-m-d')
        ));
    }

    function edit_ticket($id, $title, $content, $author)
    {
        $this->db->where('id', $id);
        return $this->db->update('tickets', array(
            'title'     => $title,
            'content'   => $content,
            'author'    => $author,
            'date'      => date('Y-m-d')
        ));
    }

    function remove_ticket($id)
    {
        $this->db->select('*');
        $this->db->from('tickets');
        $this->db->where('id', $id);
        $result = $this->db->query_one();
        
        if ( $result != NULL ) :
            $this->db->where('id', $id);
            $this->db->delete('tickets');
            return True;
        else :
            return False;
        endif;
    }

    function get_number_of_blogs_page()
    {
        $this->db->select('*');
        $this->db->from('tickets');
        $this->db->query();
        $total = $this->db->num_rows();
        return ceil($total/TICKETS_PER_PAGE);
    }
}

?>