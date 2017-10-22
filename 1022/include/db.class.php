<?php 

/**
* 数据库类
*/

abstract class db {
	/**
	* 连接服务器
	* parms $h 服务器地址
	* parms $u 用户名
	* parms $p 密码
	*/
	abstract public function connect($h,$u,$p);

	/**
	* 发送查询
 	* parms $sql 发送的sql语句
 	* return mixed bool/resource
	*/
	abstract public function query($sql);

	/**
	* 查询多行数据
	* parms $sql 发送的sql语句
	* return array/bool
	*/
	abstract public function getAll($sql);

	/**
	* 查询单行数据
	* parms $sql 发送的sql语句
	* return array/bool
	*/
	abstract public function getRow($sql);

	/**
	* 查询单个数据
	* parms $sql 发送的sql语句
	* return array/bool
	*/
	abstract public function getOne($sql);

	/**
	* 自动执行insert/update语句
	* parms $table 表名
	* parms $data 数据
	* parms $act 执行的动作
	* parms $where update时使用限制条件
	* return array/bool
	*/
	abstract public function autoExecute($table,$data,$act='insert',$where='');

}
