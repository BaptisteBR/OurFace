<?php

if (!isset($_SESSION)) {
	session_start();
}

//nom de l'application
$nameApp = "OurFace";

// Inclusion des classes et librairies
require_once 'lib/core.php';
require_once $nameApp.'/controller/mainController.php';

//action par défaut
$action = "connect";

if (key_exists("action", $_REQUEST))
	$action =  $_REQUEST['action'];

$context = context::getInstance();
$context->init($nameApp);

$view = $context->executeAction($action, $_REQUEST);

//traitement des erreurs de bases, reste a traiter les erreurs d'inclusion
if ($view === false) {
	echo "Une grave erreur s'est produite, il est probable que l'action ".$action." n'existe pas ...";
	die;
}

elseif ($view == context::NONE) {
	$template_view[$action] = $nameApp."/view/".$action.$view.".php";
	include($template_view[$action]);
}

?>