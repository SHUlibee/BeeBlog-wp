<?php
class User_Controller extends Base_Controller{
	public $template = 'user/browse';
	
	public function index(){

//        使用装载器进行装载模型-保证单例
        $User = $this->load->model('User');
        $user = $User->get_user();

		$data['users'] = $user;

		$this->view->render($this->template, $data);
		
	}
	
}