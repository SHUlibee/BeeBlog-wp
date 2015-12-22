<?php
class Category_Controller extends Base_Controller{
    private $category = NULL;

    public function init(){
        $this->category = $this->load->model('category');
    }

	public function index(){
        $categorys = $this->category->get(array('status =' => 0));
        $data['categorys'] = $categorys;

        if(isset($_GET['action']) && $_GET['action'] == 'add'){
            $res = $this->category->add($_POST);
            $this->redirect('category/index');
        }else if(isset($_GET['action']) && $_GET['action'] == 'recoup'){
            $res = $this->category->recoup($_GET['id']);
            $this->redirect('category/index');
        }

		$this->view->render('category/view', $data);
	}

}