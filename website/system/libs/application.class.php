<?php
class application {
    /**
     *
     * @var router
     */
    public $router;
    
    /**
     * 
     * @var view_engine_object;
     */
    public $view_engine;

    /**
     *
     * @var controller
     */
    public $controller;

    public function __construct() {
        $this->router = base::loadlib('router', true);
        base::load_model('session_'.config::getconfig('system', 'session_storage'), true);
        $this->initialize();
    }

    public function initialize() {
        date_default_timezone_set(config::getconfig('system', 'timezone'));
    }

    public function start() {
        $this->router->route();
        $this->handle_request();
        $this->render();
    }

    public function handle_request() {
        call_user_func_array(array($this->controller, ROUTE_A), array());
    }

    public function authorize() {
        //
    }

    public function render() {
        $this->view_engine = view_engine_factory::get_engine();
        $this->view_engine->display();
        $loader = new css_js_loader();
    }
}