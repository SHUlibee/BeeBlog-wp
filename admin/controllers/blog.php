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
        }

        $this->view->render('blog/add');
    }

    public function edit(){
        if($_GET['id']){
            $res = $this->blog->get_id($_GET['id']);

            $data['blog'] = $res;
            $this->view->render('blog/edit', $data);
        }

        if($_POST){
            $res = $this->blog->edit($_POST, $_POST['id']);

            $this->redirect('blog/edit?id='.$_POST['id']);
        }

    }

    public function recoup(){
        if($_GET['id']){
            $res = $this->blog->recoup($_GET['id']);
        }

        $this->redirect('blog');
    }

}