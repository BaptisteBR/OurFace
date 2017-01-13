<?php

/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController {

	/* Action en Prod */


	public static function listeAmis($request, $context) {
		if (context::getSessionAttribute("user") != null) {
			$users = utilisateurTable::getUsers();
			$context->users = $users;
			return context::SUCCESS;
		}
		$context->error = "listeAmis";
		return context::ERROR;
	}

	public static function muraction($request, $context) {
		if (!empty($_POST["friend"])) {
			$friend = utilisateurTable::getUserById($_POST["friend"]);
			$context->friend = $friend;
			return context::NONE;
		}
		if (context::getSessionAttribute("user") != null) {
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));
			$context->user = $user;
			return context::SUCCESS;
		}
		$context->error = "muraction";
		return context::ERROR;
	}

	public static function chataction($request, $context) {
		if (context::getSessionAttribute("user") != null) {
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));
			$context->user = $user;
			return context::SUCCESS;
		}
		$context->error = "chataction";
		return context::ERROR;

	}

	public static function profil($request, $context) {

		//if (!empty($_POST["friend"])) {
		//	return context::NONE;
		//}
		if (context::getSessionAttribute("user") != null) {
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));
			$context->user = $user;
			return context::SUCCESS;
		}

		$context->error = "profil";
		return context::ERROR;
	}



	public static function submit($request, $context) {

		$user = false;

		if (context::getSessionAttribute("user") == null) {

			if(!empty($_POST["identifiant"]) && !empty($_POST["motdepasse"])) {
				$user = utilisateurTable::getUserByLoginAndPass($_POST["identifiant"], $_POST["motdepasse"]);
			}
			else {
				$context->error = "submit";
				return context::ERROR;
			}
			
		}
		else {
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));
		}

		if ($user === false) {
			$context->error = "Identifiant ou mot de passe incorrect";
			return context::ERROR;
		}

		context::setSessionAttribute('user', $user->id);
		$context->user = $user;
		
		$users = utilisateurTable::getUsers();
		$context->users = $users;
		
		$chats = chatTable::getChats();
		$context->chats = $chats;


		return context::SUCCESS;
	}

	public static function displayFriendWall($request, $context) {

		$friend = utilisateurTable::getUserById($_POST['friendId']);
		if($friend === false) {
			$context->user = "Erreur mainController";
			return context::ERROR;
		}
		else {
			context::setSessionAttribute('friend', $friend->id);
			$users = utilisateurTable::getUsers();
			context::setSessionAttribute('users', $users);
		}
		return context::NONE;
	}

	public static function publishMessageOnWall($request, $context) {
		/*
		$message = $_POST['message'];
		$user = context::getSessionAttribute('user');
		if(empty($_GET['friendId'])) {
			
			messageTable::addMessage($user->id, $user->id, $user->id, $message);

		}
		else {
			$friend = utilisateurTable::getUserById($_GET['friendId']);
			context::setSessionAttribute('friend', $friend->id);
			
			messageTable::addMessage($user->id, $friend->id, $user->id, $message);

		}

		$users = utilisateurTable::getUsers();
		context::setSessionAttribute('users', $users);

		return context::SUCCESS;
		*/
	}


	public static function connect($request, $context) {
		context::setSessionAttribute('user', null);
		return context::SUCCESS;
	}
	
	public static function logout($request, $context) {
		context::setSessionAttribute('user', null);
		return context::SUCCESS;
	}
}
