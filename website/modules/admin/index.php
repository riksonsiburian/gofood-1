<?php 
class index extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function init() {
        $title = 'GoFood, 吃货的幸福';
        $this->assign(get_defined_vars());
        $this->template('index');
    }
}
?>