<?php
class Blog_Controller extends Base_Controller{
	
	public function index(){
		$this->view->render('blog/view');
	}

    public function add(){
        $this->view->render('blog/add');
    }


}