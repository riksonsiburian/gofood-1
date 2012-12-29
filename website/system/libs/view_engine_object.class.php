<?php
abstract class view_engine_object {

    /**
     * Initialize the engine.
     */
    public abstract function initialize();
    
    /**
     * Return the engine instance.
     * @return the engine instance
     */
    public abstract function get_engine();
    
    /**
     * Render the tplname as html and output the content to browser.
     * @param string $tplname
     */
    public abstract function display($tplname);
    
    /**
     * Exposed the $vars to template.
     * @param array $vars
     */
    public abstract function assign($vars);
}