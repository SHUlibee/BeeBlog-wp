﻿<?php
/**
 * 框架入口
 * @author code29
 */
class Bee_Bphp{

    private $controller = null;

    private $ctrl = null;
    private $func = null;
    private $getVars = null;

    private $default_ctrl = 'index';
    private $default_func = 'index';
	
	public function __construct(){
        //初始化配置
        $this->_initConfig();

        //检验必要常量
        $this->_validateConst();

        //初始化访问参数
		$this->_initRequest();
	}
	
	/**
	 * 
	 * @param string $ctrl
	 * @param string $func
	 * @param array $getVars
	 */
	public function run(){

        $ctrl = $this->ctrl;
        $func = $this->func;

		//如果未传方法名，则默认index方法
		if(empty($func)) $func = $this->default_func;

		//构造控制器文件路径
		$target = SERVER_ROOT . '/controllers/' . $ctrl. '.php';
		
		//如果控制器文件存在
		if(file_exists($target)){
			include_once($target);
			
			//构造控制器类名
			$class = ucfirst($ctrl) . '_Controller';
			
			if(class_exists($class)){
                //创建对应的类，并且设置request
				$this->controller = new $class;
                $this->controller->setRequest($ctrl, $func, $this->getVars);
			}else{
				throw new Error_Bphp("class $class does not exist!");
			}
		}else{
			throw new Error_Bphp("page $ctrl does not exist!");
		}
		
		if(method_exists($this->controller, $func)){
			$this->controller->$func();
		}else{
			throw new Error_Bphp("function $func dose not exist!");
		}
	}

    /**
     * 域名中 c => controller; f => function;
     */
    private function _initRequest(){
        //以 访问 http://域名/index.php?c=user&f=main&param=value 为例
        //获取所有请求>>获取 page1&param=value
        $request = $_SERVER['QUERY_STRING'];
        if(empty($request)) $request = 'c=' . $this->default_ctrl;

        //解析$request变量>>获取 array('c=user', 'f=main', 'param=value')
        $parsed = explode('&', $request);

        //用户请求的页面>>获取 c=user, $parsed = array('main', 'param=value')
        $c = array_shift($parsed);
        $ctrl = !preg_match('/^(?!c=)/', $c) ? str_replace('c=', '', $c) : '';
        //用户请求的页面>>获取 f=main, $parsed = array('param=value')
        $f = array_shift($parsed);
        $func = !preg_match('/^(?!f=)/', $f) ? str_replace('f=', '', $f) : '';

        //解析出GET参数
        $getVars = array();
        foreach ($parsed as $argument){
            list($variable, $value) = explode('=', $argument);
            $getVars[$variable] = $value;
        }

        $this->ctrl     = $ctrl;
        $this->func     = $func;
        $this->getVars  = $getVars;
    }

    private function _validateConst(){
        if(!defined('APP_NAME')) throw new Error_Bphp("APP_NAME had not be defined!");
        if(!defined('SERVER_ROOT')) throw new Error_Bphp("SERVER_ROOT had not be defined!");
        if(!defined('FRAME_ROOT')) throw new Error_Bphp("FRAME_ROOT had not be defined!");
        if(!defined('ENVIRONMENT')) throw new Error_Bphp("ENVIRONMENT had not be defined!");
    }

    private function _initConfig(){
        $sysConfig = Loader_Bphp::create()->config('system');

        //模版文件后缀
        if(isset($sysConfig['view_suffix'])){
            View_Bphp::create()->setSuffix($sysConfig['view_suffix']);
        }
        //母板，如菜单等相似部件
        if(isset($sysConfig['master'])){
            View_Bphp::create()->setMaster($sysConfig['master']);
        }
        //默认控制器名
        if(isset($sysConfig['default_ctrl'])){
            $this->default_ctrl = $sysConfig['default_ctrl'];
        }
        //默认方法名
        if(isset($sysConfig['default_func'])){
            $this->default_func = $sysConfig['default_func'];
        }

    }


    public function getCtrl(){
        return $this->ctrl;
    }

    public function getFunc(){
        return $this->func;
    }
}
