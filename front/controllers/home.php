<?php
class Home_Controller extends Base_Controller{
    private $blog = NULL;

    public function init(){
        $this->blog = $this->load->model('blog');
    }
	public function index(){

        $blogs = $this->blog->get();

        $data['blogs'] = $blogs;
		$this->view->render('home/index', $data);
	}


}