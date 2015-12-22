<?php
/**
 * 处理模型
 * @author bee
 */
class Model_Bphp{

	/**
	 * 数据库名称
	 */
	protected $db_name = 'default';

    /**
     * 数据库实例
     */
    protected $db = null;

    /**
     * sql选项
     */
    protected $options = null;

	/**
	 * 数据库连接参数
	 */
	protected $link = NULL;

    /**
     * @var string 表前缀
     */
    protected $prefix = '';

	/**
	 * 数据库连接
	 */
	protected $con = NULL;

	/**
	 * sql语句
	 */
	protected $query = '';

	public function __construct(){

		$this->link = Loader_Bphp::config('database', ENVIRONMENT);
        $this->db = Db_Bphp::factory($this->link['dbdriver']);
        $this->prefix = $this->link['prefix'];
		if(isset($this->link)){
//			$this->connect_db();
            $this->db->connect($this->link);
		}else{
			throw new Error_Bphp("This database does not exist!");
		}
	}

    /**
     * 只查询单条记录
     * @return mixed
     */
    public function find(){
        if(!isset($this->options['table']) || !$this->options['table']) throw new Error_Bphp("table必填");
        $this->options['limit'] = 1;
        $res = $this->db->query($this->options);
        return isset($res[0]) ? $res[0] : NULL;
    }
    public function select(){
        if(!isset($this->options['table']) || !$this->options['table']) throw new Error_Bphp("table必填");
        $res = $this->db->query($this->options);
		return $res;
	}

    public function insert($data){
        if(!isset($this->options['table']) || !$this->options['table']) throw new Error_Bphp("table必填");
        $res = $this->db->insert($data, $this->options);
        return $res;
    }

    public function update($data){
        if(!isset($this->options['table']) || !$this->options['table']) throw new Error_Bphp("table必填");
        $res = $this->db->update($data, $this->options);
        return $res;
    }

    public function delete(){

    }

    public function field($fields){
        $this->options['field'] = $fields;
        return $this;
    }
    public function from($table){
        $this->options['table'] = $table;
		return $this;
	}
    public function table($table){
        $this->options['table'] = $table;
        return $this;
    }

    /**
     * where分析 目前只支持 'field = "data1"' 和 array('field <>' => $data1)
     * @param $where
     * @return $this
     */
    public function where($where){
        if($where){
            $this->options['where'] = $where;
        }
		return $this;
	}

    /**
     * limit分析 目前只支持 '1' 和 '1,1'
     * @param $limit
     * @return $this
     * @throws Error_Bphp
     */
    public function limit($limit){
        if(is_numeric($limit) && $limit <= 0) throw new Error_Bphp("limit不能小于0");
        if(is_string($limit) && trim($limit) == '') return $this;
        $this->options['limit'] = $limit;
        return $this;
    }

    /**
     * 执行查询语句，并返回对象数据
     * @param $query
     * @return mixed
     * @throws Error_Bphp
     */
    public function query($query){
        if(!is_string($query)) throw new Error_Bphp("The 'query' param must be string");
        $res = $this->db->query($query);
        return $res;
    }

    /**
     * 预执行，不做解析，一般用于增删改
     * @param $query
     * @return mixed
     * @throws Error_Bphp
     */
    public function execute($query){
        if(!is_string($query)) throw new Error_Bphp("The 'query' param must be string");
        $res = $this->db->execute($query);
        return $res;
    }

	public function __destruct(){
		if($this->con)
			$this->db->close($this->con);
	}

}