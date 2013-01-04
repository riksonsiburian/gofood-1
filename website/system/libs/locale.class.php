<?php 
class locale {
    public function setlocale($locale) {
        putenv('LC_ALL=zh_CN');
        setlocale(LC_MESSAGES, 'zh_CN');
    }
    
    public function setdomain($text_domain = null) {
        textdomain($text_domain);
    }
    
    public function register_domains() {
        $locale = BASEPATH.SP.'locale';
    }
}
?>