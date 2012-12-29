<?php
class config {
    private static $domains;
    
    /**
     * Get configurations
     * 
     * @param string $domain 
     * @param string $key optional
     * @return mixed array or single setting
     */
    public static function getconfig($domain, $key = null) {
        if (isset(self::$domains[$domain])) {
            $conf = self::$domains[$domain];
        }
        else {
            $conf = include BASEPATH.SP.'configs'.SP."$domain.php";
            self::$domains[$domain] = $conf;
        }
        
        return isset($key) ? $conf[$key] : $conf;
    }
}