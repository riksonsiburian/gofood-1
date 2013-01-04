<?php
/**
 * System Configurations
 */
return array(
'timezone' => 'Asia/Shanghai',              

'cache_dir' => BASEPATH.SP.'caches',
'theme_dir' => BASEPATH.SP.'templates'.SP.'classic',
'template_engine' => 'php',
'page_404' => '404.html',
'page_default' => 'admin/index/init',
        
//Session配置
'session_storage' => 'mysql',
'session_ttl' => 1800,
'session_savepath' => BASEPATH.SP.'caches'.SP.'sessions'.SP,
'session_n' => 0,
);