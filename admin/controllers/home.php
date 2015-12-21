<?php
class Home_Controller extends Base_Controller{

	public function index(){
		$this->view->render('home/view');
	}

    public function test(){
        $this->load->helper('structure');
    }
	
}