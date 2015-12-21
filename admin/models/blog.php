<?php
/**
 * Created by PhpStorm.
 * User: bee
 * Date: 15-12-15
 * Time: 下午4:05
 */

class Blog_Model extends Model_Bphp{
    public function __construct(){
        parent::__construct();

        $this->tb_user = $this->prefix.'user';
        $this->tb_blog = $this->prefix.'blog';
        $this->tb_category = $this->prefix.'category';
    }

    public function get($where, $limit){

        $res = $this->from($this->tb_blog)
            ->where($where)
            ->limit($limit)
            ->select();
        return $res;
    }

    public function add($data){
        if(!isset($data['create_time'])){
            $data['create_time'] = date('Y-m-d H:i:s',  time());
        }
        $res = $this->table($this->tb_blog)
            ->insert($data);
        return $res;
    }

    public function recoup($id){

    }
}