<?php
class view_engine_smarty extends view_engine_object {
    
    /**
     * Template Engine: Smarty
     * 
     * @var Smarty
     */
    private $engine;

    /**
     * Get an underlying instance of the engine.
     */
    public function __construct() {
        $this->engine = new SmartyBC();
        $this->initialize();
    }
    
    /**
     * Initialize the engine.
     */
    public function initialize() {
        $config = config::getconfig('smarty');
        
        $this->engine->debugging = isset($config['debug']) ? $config['debug'] : false;
        $this->engine->caching = isset($config['caching']) ? $config['caching'] : false;
        $this->engine->cache_lifetime = $config['cache_lifetime'];
        $this->engine->template_dir = config::getconfig('system', 'theme');
        $this->engine->compile_dir = $config['compile_dir'];
        $this->engine->cache_dir = $config['cache_dir'];
    }
        
    /**
     * Initialize the engine.
     * @return Smarty
     */
    public function get_engine() {
        return $this->engine;
    }
    
    /**
     * Render the tplname as html and output the content to browser.
     * @param string $tplname
     */
    public function display($tplname) {
        $this->engine->display(ROUTE_M.SP.$tplname.'.tpl.php');
    }
    
    /**
     * Exposed the $vars to template.
     * @param array $vars
     */
    public function assign($vars) {
        foreach($vars as $key => $value) {
            $this->engine->assign($key, $value);
        }
    }
}