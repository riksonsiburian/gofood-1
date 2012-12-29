<?php
class view_engine_php extends view_engine_object {
    
    private $tpl_vars = array();
    
    /**
     * Get an underlying instance of the engine.
     */
    public function __construct() {
        $this->initialize();
    }
    
    /**
     * Initialize the engine.
     */
    public function initialize() {
        // 
    }
        
    /**
     * Initialize the engine.
     * @return Smarty
     */
    public function get_engine() {
        return false;
    }
    
    /**
     * Render the tplname as html and output the content to browser.
     * @param string $tplname
     */
    public function display($tplname) {
        $filepath = config::getconfig('system', 'theme').SP.ROUTE_M.SP.$tplname.'.tpl.php';
        if (file_exists($filepath)) {
            extract($this->tpl_vars);
            include $filepath;
        }
        else {
            trigger_error("$filepath doesn't exist.");
        }
    }
    
    /**
     * Exposed the $vars to template.
     * @param array $vars
     */
    public function assign($vars) {
        $this->tpl_vars = array_merge($this->tpl_vars, $vars);
    }
}