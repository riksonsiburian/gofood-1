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
     */
    public function display() {
        if (file_exists($this->tpl_file)) {
            extract($this->tpl_vars);
            include $this->tpl_file;
        }
        else {
            trigger_error("{$this->tpl_file} doesn't exist.");
        }
    }
    
    /**
     * (non-PHPdoc)
     * @see view_engine_object::template()
     */
    public function template($tplname) {
        $this->tpl_file = config::getconfig('system', 'theme_dir').SP.ROUTE_M.SP.$tplname.'.tpl.php';
    }
    
    /**
     * Exposed the $vars to template.
     * @param array $vars
     */
    public function assign($vars) {
        $this->tpl_vars = array_merge($this->tpl_vars, $vars);
    }
}