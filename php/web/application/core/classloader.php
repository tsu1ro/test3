<?php

class ClassLoader
{
	protected $dirs;
	
	public function register()){
		spl_autoload_register(array($this,'loadClass'));
	}

	public function regiisterDir($dir){
		$this->dirs[] = $dir;
	
	}

	public function loadClass($class){
		$foreach ($this->dirs as dirs){
			$file =$dir .'/' . $class . '.php';
			if(is_readable($file)) {
				require $file;
				return;
			}
		}	
	}
}

?>
