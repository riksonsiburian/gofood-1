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
        $this->filebase = THEMEPATH . '/' . config::getconfig('system', 'theme') . '/';
        $this->uri = ROUTE_M.'/'.ROUTE_C.'/'.ROUTE_A;
    }
    
    private function get_js_files() {
        $result = array();
        
        $xpath = new DOMXPath($this->web);
        $query = '//site/js/page';
        $node_list = $xpath->query($query);
        foreach ($node_list as $node) {
            $result[$node->getAttribute('url')] = $node->nodeValue;
        }
        
        return $result;
    }
    
    private function get_css_files() {
        $result = array();
        
        $xpath = new DOMXPath($this->web);
        $query = '//site/css/page';
        $node_list = $xpath->query($query);
        foreach ($node_list as $node) {
            $result[$node->getAttribute('url')] = $node->nodeValue;
        }
        
        return $result;
    }
    
    public function load() {
        $webpath = 
        $path = ROUTE_M.'/'.ROUTE_C.'/'.ROUTE_A;
    }
    
    public function add_js($js_filename) {
        $this->js[] = $js_filename;
    }
    
    public function add_css($css_filename) {
        $this->css[] = $css_filename;
    }
}