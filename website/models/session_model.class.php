<?php
class session_model extends model {
	public function __construct() {
		$this->db_config = config::getconfig('database');
		$this->db_setting = 'default';
		$this->table_name = 'session';
		parent::__construct();
	}
}
?>