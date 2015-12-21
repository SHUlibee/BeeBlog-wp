<?php
class Login_Controller extends Controller_Bphp{

    const P_ERROR = 1;

	public function __construct(){
		parent::__construct();

        $this->view->setMaster('simple');
	}
	
	public function index(){
        if(isset($_SESSION['account'])){
            $this->redirect('home');
        }

        $pattern = isset($_GET['pattern']) ? $_GET['pattern'] : null;

        if($pattern == self::P_ERROR){
            $this->view->render('login/view', $_GET);
        }
		$this->view->render('login/view');
	}
	
	public function do_login(){

		$acc = $_POST['log'];
		$pwd = $_POST['pwd'];

		$User = $this->load->model('user');
		$user = $User->get_user_by_account($acc);

		if($pwd && isset($user) && $pwd == $user->password){
			$_SESSION['account'] = $acc;

            $this->redirect('home');
		}else{
            $data = array('pattern' => self::P_ERROR, 'log' => $acc);
            $this->redirect('login', $data);
		}
		
	}
	
	public function do_logout(){
		if(isset($_SESSION['account'])){
			unset($_SESSION['account']);
		}
        $this->redirect('login', null);
	}

}