<?php
class Base_Controller extends Controller_Bphp{
	
	public function __construct(){
		parent::__construct();
		
		//登录验证
		if(!isset($_SESSION['account'])){
			//域名自动补齐
			$this->redirect('login');
		}
		
	}
	
}