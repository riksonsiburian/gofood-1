<?php
return array(
'debug' => false,
'caching' => true,
'cache_lifetime' => 3600,
'cache_dir' => config::getconfig('system', 'cache_dir').SP.'smarty'.SP.'cache',
'compile_dir' => config::getconfig('system', 'cache_dir').SP.'smarty'.SP.'templates_c',
);