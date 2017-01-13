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

	if (isset($context->error)) {
		echo $context->error;
	}
	else {
		echo "Une grave erreur s'est produite, il est probable que l'action ".$action." n'existe pas ...";
	}
	
	die;
}

//inclusion du layout qui va lui meme inclure le template view
elseif ($view != context::NONE) {

	if (isset($context->views)) {
		foreach ($context->views as $v) {
			$template_view[$v] = $nameApp."/view/".$v.$context->executeAction($v, $_REQUEST).".php";
		}
	}

	$template_view[$action] = $nameApp."/view/".$action.$view.".php";
	include($nameApp."/view/".$context->getLayout().".php");

}

?>