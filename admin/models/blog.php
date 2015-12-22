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

    public function get_id($id){
        $res = $this->from($this->tb_blog)
            ->where(array('id =' => $id))
            ->find();
        return $res;
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
            $data['create_time'] = time();
        }
        $res = $this->table($this->tb_blog)
            ->insert($data);
        return $res;
    }

    public function edit($data, $id){
        if(isset($data['id'])){
            unset($data['id']);
        }

        $res = $this->table($this->tb_blog)
            ->where(array('id =' => $id))
            ->update($data);
        return $res;
    }

    /**
     * 逻辑删除
     * @param $id
     */
    public function recoup($id){
        $data['update_time'] = time();
        $data['status'] = 1;
        $res = $this->table($this->tb_blog)
            ->where(array('id =' => $id))
            ->update($data);
        return $res;
    }
}