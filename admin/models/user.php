<?php

class User_Model extends Model_Bphp{
	


	public function __construct(){
		parent::__construct();

        $this->tb_user = $this->prefix.'user';
        $this->tb_role = $this->prefix.'role';
        $this->tb_right = $this->prefix.'right';
	}
	
	public function get_user(){
		return $this->from($this->tb_user)->select();

//		$sql = "select * from $this->tb_user";
//      $res = $this->query($sql);
//		return $res;
	}
	
	public function get_user_by_account($account){
        return $this->from($this->tb_user)->where(array('account =' => $account))->find();

//		$sql = "select * from $this->tb_user where account = '$account'";
//		$res = $this->query($sql);
//		return isset($res[0]) ? $res[0] : NULL;
	}
	
}