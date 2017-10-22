<?php

/***
* 配置文件读写类
*/

class conf{
	//作为对象
	protected static $ins = null;
	//接收配置文件中的数组
	protected $data = array();

	//一次性将配置文件信息读取过来，以后就不必再去管配置文件了
	final protected function __construct(){
		include(ROOT.'include/config.inc.php');
		//echo __FILE__;
		$this->data = $_CFG;
	}

	final protected function __clone(){

	}
	//单例模式创建对象
	public static function getIns(){
		if(self::$ins instanceof self){
			return self::$ins;
		}else{
			self::$ins = new self();
			return self::$ins;
		}
	}

	//用魔术方法读取data内的信息
	public function __get($key){
		if(array_key_exists($key, $this->data)){
			return $this->data[$key];
		}else {
			return null;
		}
	}

	//用魔术方法在运行期动态改变或增加配置选项
	public function __set($key,$value){
		$this->data[$key] = $value;
	}
}

// $conf = conf::getIns();
// echo $conf->host;
// echo $conf->template = 'dir';