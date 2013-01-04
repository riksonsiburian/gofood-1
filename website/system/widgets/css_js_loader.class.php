<?php
class css_js_loader {
    
    public $js = array();
    public $css = array();
    
    /**
     * 
     * @var DOMDocument
     */
    public $web;
    
    private $filebase, $uri;
    
    public function __construct() {
        $this->web = new DOMDocument();
        $this->web->load(BASEPATH.SP.'configs'.SP.'web.xml');
        $this->filebase = BASEPATH.SP.'assets';
        $this->js = $this->get_js_files();
        $this->css = $this->get_css_files();
    }
    
    private function get_js_files() {
        $result = array();
        
        $xpath = new DOMXPath($this->web);
        $query = '//site/js/page';
        $node_list = $xpath->query($query);
        foreach ($node_list as $node) {
            if (in_array($node->getAttribute('url'), $this->get_path_set())) {
                $result[$node->getAttribute('url')] = $node->nodeValue;
            }
        }

        return $result;
    }
    

    private function get_css_files() {
        $result = array();
    
        $xpath = new DOMXPath($this->web);
        $query = '//site/css/page';
        $node_list = $xpath->query($query);
        foreach ($node_list as $node) {
            if (in_array($node->getAttribute('url'), $this->get_path_set())) {
                $result[$node->getAttribute('url')] = $node->nodeValue;
            }
        }
    
        return $result;
    }
    
    private function get_path_set() {
        return array(
                '/',
                ROUTE_M.'/'.ROUTE_C.'/'.ROUTE_A,
                ROUTE_M.'/'.ROUTE_C.'/',
                ROUTE_M.'/'
                );
    }
    
    public function add_js($js_filename) {
        $this->js[] = $js_filename;
    }
    
    public function add_css($css_filename) {
        $this->css[] = $css_filename;
    }
}