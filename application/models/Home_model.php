<?php
class Home_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_player_data()
	{
        $query = $this->db->query('SELECT * FROM garvhai_players LIMIT 10');
        return $query->result_array();
	}
    public function get_player_video()
    {
        $query = $this->db->query('SELECT * FROM garvhai_players_media WHERE player_id = 1 LIMIT 8');
        return $query->result_array();
    }
    

    public function get_player_modal_data($mode = '',$player_id = '')
    {
        if ($mode == 'profile') {
            $query = $this->db->get_where('garvhai_players', array('id' => $player_id));
        }else if($mode == 'videos'){
            $query = $this->db->get_where('garvhai_players', array('id' => $player_id));
        }else if($mode == 'media'){
            $query = $this->db->get_where('garvhai_players_media', array('player_id' => $player_id));
        }
        //echo $this->db->last_query(); exit();
        return $query->result_array();
    }

     public function get_player_filter_data($player_id = '')
    {
        $query = $this->db->get_where('garvhai_players_media', array('player_id' => $player_id), 8, 0);
        //echo $this->db->last_query(); exit();
        return $query->result_array();
    }
}