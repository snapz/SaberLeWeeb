<?php

Class Blog_Model extends TinyMVC_Model
{
    function get_all_tickets($limit)
    {
        $this->db->select('*');
        $this->db->from('tickets');
        $this->db->orderby('ID DESC');
        $this->db->limit($limit);
        $tickets = $this->db->query_all();
        $data = array();
        foreach($tickets as $key => $ticket){
            $data[$key]['id']       = $ticket['id'];
            $data[$key]['title']    = $ticket['title'];
            if ( strlen($ticket['content']) > 430 ) :
                $content = substr($ticket['content'], 0, 430) . "...";
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
}

?>