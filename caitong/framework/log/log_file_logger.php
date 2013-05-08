<?php
//
// 文件日志
//

class log_file_logger {
	private $config;
	
	private $log_file   = "log";
	private $log_format = "[time][level][module]:msg";
	private $log_type   = "html";
	
	public function init($config) {
		if (isset($config["log_file"])) {
			$this->log_file = $config["log_file"];
		}
		if (isset($config["log_format"])) {
			$this->log_format = $config["log_format"];
		}
		if (isset($config["log_type"])) {
			$this->log_type = $config["log_type"];
		}
	}
	
	public function writeLog($log_entry) {
		$dir = APP_ROOT . "/logs/";
		$msg = $this->log_format;
		foreach ($log_entry as $k => $v) {
			$msg = str_replace($k, $v, $msg);
		}
		if ($this->log_type === "html") {
			$msg = "<div class=\"".$log_entry['level']."\"> $msg </div>";
		}
		return $this->_writeLog($dir, $this->log_file, $msg, $this->log_type);
	}
	
	private function _writeLog($logdir, $log_file, $msg, $log_type) {
		$file = $logdir . $log_file . "." . $log_type;
		
		/*
		if (file_exists($file)) {
			if (@filesize($file) > 2048000) {
				$dir = opendir($logdir);
				$maxid = $id = 0;
				while ($f = readdir($dir)) {
					
				}
			}
		} */
		if($fp = @fopen($file, 'a')) {
			@flock($fp, 2);
			fwrite($fp, $msg."\r\n");
			fclose($fp);
		}
	}
}

?>