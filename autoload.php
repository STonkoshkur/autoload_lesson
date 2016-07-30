<?php
	class Autoload {
		public static function loader($className) {
			$className = str_replace('\\', '/', $className);
			require_once 'vendor/' . $className . '.php';
		}
	}

	spl_autoload_register(array('Autoload','loader'));