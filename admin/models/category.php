<?php
/**
 * Created by PhpStorm.
 * User: bee
 * Date: 15-12-15
 * Time: 下午4:05
 */

class Category_Model extends Model_Bphp{
    public function __construct(){
        parent::__construct();

        $this->tb_category = $this->prefix.'category';
    }

    public function get($where, $limit = ''){

        $res = $this->from($this->tb_category)
            ->where($where)
            ->limit($limit)
            ->select();
        return $res;
    }

    public function add($data){
        $res = $this->table($this->tb_category)
            ->insert($data);
        return $res;
    }

    /**
     * 逻辑删除
     * @param $id
     */
    public function recoup($id){
        $data['status'] = 1;
        $res = $this->table($this->tb_category)
            ->where(array('id =' => $id))
            ->update($data);
        return $res;
    }
}