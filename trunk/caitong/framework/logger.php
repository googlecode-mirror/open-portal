<?php
//
// 日志类
//

class logger {
	
	private static $log;
	
	public static function init($config) {
		$logger_class = isset($config["logger_class"])? $config["logger_class"] : "log_file_logger";
		self::$log = new $logger_class;
		self::$log->init($config);
	}
	
	public static function trace($msg, $module="") {
		$log_entry = self::make_log_entry(array(
			"msg"=>$msg, 
			"module"=>$module,
			"level"=>"TRACE"
			));
		return self::$log->writeLog($log_entry);
	}
	
	public static function debug($msg, $module="") {
		$log_entry = self::make_log_entry(array(
			"msg"=>$msg, 
			"module"=>$module,
			"level"=>"DEBUG"
			));
		return self::$log->writeLog($log_entry);
	}
	
	public static function info($msg, $module="") {
		$log_entry = self::make_log_entry(array(
			"msg"=>$msg, 
			"module"=>$module,
			"level"=>"INFO"
			));
		return self::$log->writeLog($log_entry);
	}
	
	public static function warn($msg, $module="") {
		$log_entry = self::make_log_entry(array(
			"msg"=>$msg, 
			"module"=>$module,
			"level"=>"WARN"
			));
		return self::$log->writeLog($log_entry);
	}
	
	public static function error($msg, $ex = false, $module="") {
		if ($ex) {
			$msg = $msg . '\r\n' . $ex->getMessage() . '\r\n File: ' . $ex->getFile() . '\r\n Line: ' . $ex->getLine();
		}
		$log_entry = self::make_log_entry(array(
			"msg"=>$msg, 
			"module"=>$module,
			"level"=>"ERROR"
			));
		return self::$log->writeLog($log_entry);
	}
	
	private static function make_log_entry($info) {
		$info['time'] = gmdate('Y-m-d H:i:s');
		return $info;
	}
	
}

?>