<?php
error_reporting(E_ALL);

ini_set('ignore_repeated_errors', TRUE);

ini_set('display_errors', FALSE);

ini_set('log_errors', TRUE);

ini_set("error_log", "/xampp/htdocs/ProyectoLoginInicio/php-error.log");
error_log( "Errores posibles!" );

//tail -f /tmp/php-error.log
require_once 'libs/database.php';
require_once 'libs/messages.php';

require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/model.php';
require_once 'libs/app.php';


require_once 'classes/session.php';
require_once 'classes/sessionController.php';
require_once 'classes/errors.php';
require_once 'classes/success.php';


require_once 'config/config.php';

include_once 'models/usermodel.php';
include_once 'models/expensesmodel.php';
include_once "models/categoriesmodel.php";
include_once "models/joinexpensescategoriesmodel.php";

$app = new App();

?>