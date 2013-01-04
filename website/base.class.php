<?php
if (!defined('SP')) define('SP', DIRECTORY_SEPARATOR);
if (!defined('BASEPATH')) define('BASEPATH', realpath(dirname(__FILE__)));
if (!defined('SITE_URL')) define('SITE_URL', (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ''));
include_once BASEPATH.SP.'system'.SP.'libs'.SP.'constants.php';

class base {

    /**
     *
     * @var application
     */
    public static $app;

    /**
     *
     * @var finder
     */
    public static $finder;

    public static function loadmodule($classname, $modulename = null) {
        $modulepath = $modulename ? BASEPATH.SP.'modules'.SP.$modulename : BASEPATH.SP.'modules';
        $classes = self::$finder->find("$classname.php", $modulepath)->files();
        if ($classes) foreach($classes as $class) {
            require_once "$class";
        }
    }
    
    public static function load_model($classname, $init = false) {
        $classes = self::$finder->find("$classname.class.php", BASEPATH.SP.'models')->files();
        if ($classes) foreach($classes as $class) {
            require_once "$class";
        }
        
        if ($init) {
            return new $classname();
        }
    }

    /**
     * @deprecated;
     */
    public static function loadlib($libname, $init = false) {
        $filepath = BASEPATH.SP.'system'.SP.'libs'.SP."$libname.class.php";

        if (file_exists($filepath)) {
            require_once $filepath;
        }

        if ($init) {
            return new $libname();
        }
    }
    
    public static function load_sys_class($classname, $init = false) {
        $classes = self::$finder->find("$classname.php", BASEPATH.SP.'system')->files();
        if ($classes) foreach($classes as $class) {
            require_once "$class";
        }
        
        if ($init) {
            return new $classname();
        }
    }
    
    public static function load_module_class($classname, $init = false) {
        $classes = self::$finder->find("$classname.php", BASEPATH.SP.'modules')->files();
        if ($classes) foreach($classes as $class) {
            require_once "$class";
        }
        
        if ($init) {
            return new $classname();
        }
    }

    public static function autoload($classname) {
        $classes = self::$finder->find("$classname.class.php", BASEPATH.SP)->files();
        if ($classes) foreach($classes as $class) {
            require_once "$class";
        }
    }

    public static function init() {
        // ob_start();
        self::$finder = self::loadlib('finder', true);
        spl_autoload_register(array('base', 'loadlib'));
        spl_autoload_register(array('base', 'load_sys_class'));
        spl_autoload_register(array('base', 'load_module_class'));
        spl_autoload_register(array('base', 'loadmodule'));
        spl_autoload_register(array('base', 'autoload'));
        self::$app = self::loadlib('application', true);
        self::$app->start();
        //$contents = ob_get_contents();
        //ob_end_clean();
        //echo $contents;
    }
}