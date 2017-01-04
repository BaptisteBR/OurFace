<?php

//nom de l'application
$nameApp = "OurFace";

// Inclusion des classes et librairies
require_once 'lib/core.php';
require_once $nameApp.'/controller/mainController.php';


if (!isset($_SESSION)) {
	session_start();
}

//action par défaut
$action = "index";

if(key_exists("action", $_REQUEST))
	$action =  $_REQUEST['action'];

//session_start();

$context = context::getInstance();
$context->init($nameApp);

if ($action == "submit") {

}
else {
	if (!empty($_SESSION['user'])) {

	}
	else {
		$action = "connect";
	}
}

/*
if(!empty($_SESSION['user']) || $action =="submit") 
{
	//$action = "submit";
}
else{
	$action = "connect";
}
*/
$view = $context->executeAction($action, $_REQUEST);

//traitement des erreurs de bases, reste a traiter les erreurs d'inclusion
if($view===false){
	echo "Une grave erreur s'est produite, il est probable que l'action ".$action." n'existe pas...";
	die;
}

//inclusion du layout qui va lui meme inclure le template view
elseif($view!=context::NONE){
	$template_view=$nameApp."/view/".$action.$view.".php";
	include($nameApp."/view/".$context->getLayout().".php");
}

?>
