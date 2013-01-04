<?php
abstract class view_engine_object {

    /**
     * template file path.
     * @var file path.
     */
    protected $tpl_file;
    
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
     */
    public abstract function display();
    
    /**
     * Set the tpl file.
     * @param string $tplname
     */
    public abstract function template($tplname);
    
    /**
     * Exposed the $vars to template.
     * @param array $vars
     */
    public abstract function assign($vars);
}