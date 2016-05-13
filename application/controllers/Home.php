<?php
	class Home extends CI_Controller {
		function __construct()
        {
            parent::__construct();
            //$this->load->model('news_model');
            $this->load->helper('url_helper');
            $this->load->library('session');
            $this->load->model('home_model');

        }

        public function index()
        {
            $data['title'] = 'Home';

            $data['records'] = $this->home_model->get_player_data();
            $data['videoRecords'] = $this->home_model->get_player_video();
           // echo '<pre>';   print_r($data['records']); exit();
            $this->load->view('templates/header', $data);
            $this->load->view('home/index', $data);
            $this->load->view('templates/footer');
        }

        public function player_model_data()
        {
            $mode = $this->input->post('mode');
            $player_id = $this->input->post('playerId'); 
            $data['modal_data'] = $this->home_model->get_player_modal_data($mode, $player_id);
            if(isset($data['modal_data'])){
                echo json_encode($data);
            }else{
                $data['status'] = 'Failuer';
                echo json_encode($data);
            }
        }

        public function player_filter_data()
        {
            $player_id = $this->input->post('playerId'); 
            $data['filter_data'] = $this->home_model->get_player_filter_data($player_id);
            if(isset($data['filter_data'])){
                echo json_encode($data);
            }else{
                $data['status'] = 'Failuer';
                echo json_encode($data);
            }
        }
    }