<?php
class view_engine_factory {
    
    /**
     * 
     * @var view_engine_object;
     */
    private static $engine;
    
    /**
     * Get the view_engine instance.
     * @return view_engine_object
     */
    public static function get_engine() {
        if (!isset(self::$engine)) {
            $engine_mangager = 'view_engine_'.config::getconfig('system', 'template_engine');
            self::$engine = new $engine_mangager();
        }

        return self::$engine;
    }
}