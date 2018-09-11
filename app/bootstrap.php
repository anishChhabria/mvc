
<?php

//load config
require_once 'config/config.php';

//load libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

// AUTO loader 
spl_autoload_register(function($classNAME){
    require_once 'libraries/'.$classNAME.'.php';
});


?>