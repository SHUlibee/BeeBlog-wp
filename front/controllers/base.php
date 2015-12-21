<?php
class Base_Controller extends Controller_Bphp{
	
	public function __construct(){
		parent::__construct();
		
        $this->view->setMaster('simple');
        $this->init();
	}

    protected function init(){}

}