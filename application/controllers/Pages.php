<?php
class Pages extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

    public function terms_of_use()
	{
        $data['title'] = ucfirst('terms of use'); // Capitalize the first letter

        $this->load->view('pages/terms_of_use', $data);
        
	}
}