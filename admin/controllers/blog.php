<?php
class Blog_Controller extends Base_Controller{
    private $blog = NULL;

    public function init(){
        $this->blog = $this->load->model('blog');
    }

	public function index(){

        $page = isset($_GET['page']) ? $_GET['page'] - 1 : 0;
        $size = 10;


        $blogs = $this->blog->get(array('status =' => 0), "$page , $size");

        $data['blogs'] = $blogs;
		$this->view->render('blog/view', $data);
	}

    public function add(){

        if($_POST){
            $res = $this->blog->add($_POST);
            var_dump($res); die;
        }

        $this->view->render('blog/add');
    }


}