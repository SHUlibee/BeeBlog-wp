<?php
/**
 * 处理视图
 * @author code29
 */
class View_Bphp{
	
	private static $VIEW_FILE = '';
	
	private static $VIEW_MASTER = '';
	
    private static $suffix = '.htm';

    private static $master = '/views/master';

    private static $_instance = NULL;

    public static function create(){
        if(!self::$_instance){
            self::$_instance = new View_Bphp();
        }
        return self::$_instance;
    }

    /**
     * 方案二
     * 加载模版文件
     * @param String $template
     * @param array $data
     * @param bool $use_master
     * @throws Error_Bphp
     */
    public static function render($template, $data = NULL, $use_master = true){
		
		if(trim($template) == '') throw new Error_Bphp('模版文件名不能为空！');
		
		self::$VIEW_FILE	= SERVER_ROOT .'/views/'.strtolower($template).self::$suffix;
		self::$VIEW_MASTER	= SERVER_ROOT . self::$master .self::$suffix;
		
		if(file_exists(self::$VIEW_FILE)){

            $data['body_template'] = self::$VIEW_FILE;
			if($data){
				foreach ($data as $key=>$d){
					if(is_numeric($key)) throw new Error_Bphp('必须是 键\值 型数组');
					$$key = $d;
				}
			}
			
			if($use_master){
				include(self::$VIEW_MASTER);
			}else{
				include(self::$VIEW_FILE);
			}
		}
//		die;
	}
	
	/**
	 * 设置是否使用master模版
	 * @param $value
	 */
	public function setMaster($value){
		self::$master = $value;
	}
    /**
     * 获取模版文件后缀
     * @return string
     */
    public function getSuffix(){
        return self::$suffix;
    }
    /**
     * 设置模版文件后缀
     * @param $value
     */
    public function setSuffix($value){
        self::$suffix = $value;
    }

}