<?php
class controller {

    /**
     * 
     * @var view_engine_object
     */
    protected $view_engine;
    
    private $js, $css;
    
    public function __construct() {
        $this->view_engine = view_engine_factory::get_engine();
    }
    
    public function display($tplname) {
        $this->view_engine->display($tplname);
    }
    
    public function assign($vars) {
        $this->view_engine->assign($vars);
    }
    
    public function addJs($js_filename) {
    	//
    }
    
    public function addCss($css_filename) {
    	//
    }
}
