<?php

/**
 * Created by PhpStorm.
 * User: frankie
 * Date: 17/5/2016
 * Time: 11:49 AM
 */
class Form_model extends CI_Model
{

    public function insert_comment($comment, $mark, $station)
    {
        $this->db->insert('comment', ['comment' => $comment, 'mark' => $mark, 'station_id' => $station]);

    }

    public function get_all_station()
    {
        $query = $this->db->get('station');
        return $query->result();
    }


    public function get_comment_by_station_id($id)
    {
        $this->db->where('station_id', $id);
        $query = $this->db->get('comment');
        return $query->result();
    }


}