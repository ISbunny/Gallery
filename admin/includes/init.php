<?php


defined('DS') ? null : define('DS',DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null :define('SITE_ROOT','c:'.DS.'wamp64'.DS.'www'.DS.'gallery');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH',SITE_ROOT.DS.'admin'.DS.'includes');


include_once(INCLUDES_PATH.DS."function.php");
include_once(INCLUDES_PATH.DS."db_object.php");
include_once(INCLUDES_PATH.DS."config.php");
include_once(INCLUDES_PATH.DS."database.php");
include_once(INCLUDES_PATH.DS."user.php");
include_once(INCLUDES_PATH.DS."photo.php");
include_once(INCLUDES_PATH.DS."comment.php");

include_once(INCLUDES_PATH.DS."session.php");
include_once(INCLUDES_PATH.DS."pagination.php");


?>