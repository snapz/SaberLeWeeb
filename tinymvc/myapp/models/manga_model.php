<?php

class Manga_Model extends TinyMVC_Model
{
    function get_all_manga($limit)
    {
        $this->db->select('*');
        $this->db->from('manga');
        $this->db->orderby('status ASC, title ASC');
        $this->db->limit($limit);
        $result = $this->db->query_all();
        $data = array();
        foreach($result as $key => $manga){
            $data[$key]['id']           = $manga['id'];
            $data[$key]['title']        = $manga['title'];
            $data[$key]['date']         = strcmp($manga['date'], "9999-00-00") == 0 ? "" : $manga['date'];
            $data[$key]['status']       = self::switch_status($manga['status']);
            $data[$key]['published']    = $manga['published_tomes'];
            $data[$key]['owned']        = $manga['owned_tomes'];
            $data[$key]['missing']      = $manga['published_tomes'] - $manga['owned_tomes'];
            $data[$key]['buying']       = $manga['buying_tomes'];
            $data[$key]['price']        = $manga['price'];
            $data[$key]['editor']       = $manga['editor'];
            $data[$key]['type']         = $manga['type'];
        }
        return $data;
    }

    function add_manga($title, $date, $status, $publish, $owned, $buy, $price, $editor, $type)
    {
        return $this->db->insert('manga', array(
                'title'             => $title,
                'date'              => $date,
                'status'            => $status,
                'published_tomes'   => $publish,
                'owned_tomes'       => $owned,
                'buying_tomes'      => $buy,
                'price'             => $price,
                'editor'            => $editor,
                'type'              => $type
            )
        );
    }

    function edit_manga($id, $title, $date, $status, $publish, $owned, $buy, $price, $editor, $type)
    {
        $this->db->where('id', $id);
        return $this->db->update('manga', array(
                'title'             => $title,
                'date'              => $date,
                'status'            => $status,
                'published_tomes'   => $publish,
                'owned_tomes'       => $owned,
                'buying_tomes'      => $buy,
                'price'             => $price,
                'editor'            => $editor,
                'type'              => $type
            )
        );
    }

    function remove_manga($id)
    {
        $this->db->select('*');
        $this->db->from('manga');
        $this->db->where('id', $id);
        $result = $this->db->query_one();
        
        if ( $result != NULL ) :
            $this->db->where('id', $id);
            $this->db->delete('manga');
            return True;
        else :
            return False;
        endif;
    }

    function get_manga($id)
    {
        $this->db->select('*');
        $this->db->from('manga');
        $this->db->where('id', $id);
        $manga = $this->db->query_one();

        if ( !empty($manga) ) :
            $date = explode('-', $manga['date']);
            $manga['year'] = $date[0];
            $manga['month'] = $date[1];
            $manga['day'] = $date[2];
        endif;

        return $manga;
    }

    function search_manga($query)
    {
        $result = $this->db->query_all('SELECT * FROM manga WHERE title LIKE ?', array(
            '%' .$query . '%'
        ));
        $data = array();
        foreach($result as $key => $manga){
            $data[$key]['id']           = $manga['id'];
            $data[$key]['title']        = $manga['title'];
            $data[$key]['date']         = strcmp($manga['date'], "0000-00-00") == 0 ? "" : $manga['date'];
            $data[$key]['status']       = self::switch_status($manga['status']);
            $data[$key]['published']    = $manga['published_tomes'];
            $data[$key]['owned']        = $manga['owned_tomes'];
            $data[$key]['missing']      = $manga['published_tomes'] - $manga['owned_tomes'];
            $data[$key]['buying']       = $manga['buying_tomes'];
            $data[$key]['price']        = $manga['price'];
            $data[$key]['editor']       = $manga['editor'];
            $data[$key]['type']         = $manga['type'];
        }
        return $data;
    }


////////////////////////////////// UTILS FUNCTIONS ////////////////////////////
    function switch_status($status_id)
    {
        switch($status_id)
        {
            case 0:
                return "En cours..";
            case 1:
                return "En attente";
            case 2:
                return "Termin&eacute;";
            default:
                return "¯\_(ツ)_/¯";
        }
    }
}
?>