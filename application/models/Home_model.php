<?php
class Home_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_player_data()
	{
        $query = $this->db->query('SELECT * FROM garvhai_players order by name asc LIMIT 8');
        return $query->result_array();
	}
    public function get_player_video()
    {
        $query = $this->db->query('SELECT * FROM garvhai_players_media WHERE player_id = 4 AND type <> "social" LIMIT 8');
        return $query->result_array();
    }
    

    public function get_player_modal_data($mode = '',$player_id = '')
    {
        if($player_id =='all'){
            $mode = 'allmedia';
        }
        if ($mode == 'profile') {
            $query = $this->db->get_where('garvhai_players', array('id' => $player_id));
        }else if($mode == 'videos'){
            $query = $this->db->query('SELECT gm.*,gp.name,gp.profile_photo FROM garvhai_players_media gm INNER JOIN garvhai_players gp ON gp.id = gm.player_id WHERE gm.player_id = '.$player_id.' AND gm.type <> "social" LIMIT 8');
        }else if($mode == 'allmedia'){
            $query = $this->db->query('SELECT gm.*,gp.name,gp.profile_photo FROM garvhai_players_media gm INNER JOIN garvhai_players gp ON gp.id = gm.player_id WHERE gm.type = "social"');
        }else if($mode == 'media'){
            $query = $this->db->query('SELECT gm.*,gp.name,gp.profile_photo FROM garvhai_players_media gm INNER JOIN garvhai_players gp ON gp.id = gm.player_id WHERE gm.player_id = '.$player_id.' AND gm.type = "social"');
            //$this->db->get_where('garvhai_players_media', array('player_id' => $player_id,'type' => 'social'));
        }
        //echo $this->db->last_query(); exit();
        return $query->result_array();
    }

     public function get_player_filter_data($player_id = '')
    {
        //$query = $this->db->get_where('garvhai_players_media', array('player_id' => $player_id), 8, 0);
        $query = $this->db->query('SELECT * FROM garvhai_players_media WHERE player_id = '.$player_id.' AND type <> "social" LIMIT 8');
        //echo $this->db->last_query(); exit();
        return $query->result_array();
    }

    public function user_share_data($upload_data)
    {
        $this->load->helper('url');
        $data = array(
            'user_name' => $upload_data['name'],
            'email' => $upload_data['email'],
            'mobile' => $upload_data['mobile'],
            'comment' => $upload_data['cmnt']
        );

        return $this->db->insert('garvhai_users', $data);
    }
}