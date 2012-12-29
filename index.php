<?php
/**
 * Front controller of api request.
 * all the requests are routed from the file and dispatched based the querystring.
 * for example, route path querystring r=a/b/c, will be dispatched to the method c of b.class.php in the folder a.
 * path querystring r=a/b, will be dispatched to the the method b of a.class.php in the folder a
 * @author rodney.zhang
 */
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . "base.class.php";
base::init();
