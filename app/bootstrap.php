
<?php

//load config
require_once 'config/config.php';
// load helper function
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

//load libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

// AUTO loader 
spl_autoload_register(function($classNAME){
    require_once 'libraries/'.$classNAME.'.php';
});


?>