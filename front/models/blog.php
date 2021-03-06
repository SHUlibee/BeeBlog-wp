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

    public function get($where = '', $limit = ''){
        $where['status ='] = 0;

        $res = $this->from($this->tb_blog)
            ->where($where)
            ->limit($limit)
            ->select();
        return $res;
    }

}