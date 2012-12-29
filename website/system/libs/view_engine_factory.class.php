<?php
class view_engine_factory {
    
    private static $engine;
    
    public static function get_engine() {
        if (!isset(self::$engine)) {
            $engine_mangager = 'view_engine_'.config::getconfig('system', 'template_engine');
            self::$engine = new $engine_mangager();
        }

        return self::$engine;
    }
}