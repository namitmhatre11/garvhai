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
    public function privacy_policy()
    {
        $data['title'] = ucfirst('privacy policy'); // Capitalize the first letter

        $this->load->view('pages/privacy_policy', $data);
        
    }
    public function legal_disclaimer()
    {
        $data['title'] = ucfirst('legal disclaimer'); // Capitalize the first letter

        $this->load->view('pages/legal_disclaimer', $data);
        
    }
    
}