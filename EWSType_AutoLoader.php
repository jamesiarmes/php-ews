<?php
/**
 * autoload the needed EWSTypes
 * 
 * @author Ian Tyndall <http://blog.ianty.com>
 */
class EWSType_AutoLoader {
    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }
	/**
	 * type loader
	 */
    private function loader($type) {
        // strlen(EWSType_) = 8
        $file = substr($type, 8);
        if (include_once "EWSType/$file.php") {
            $classname = "EWSType_$type";
        } else {
            throw new EWS_Exception("EWSType not found: $type");
        }
    }
} // end class EWSType_AutoLoader
