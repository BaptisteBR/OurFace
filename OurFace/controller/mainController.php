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
			$context->tabuser = $users;
			return context::SUCCESS;
		}
		else {

		}
	}

	public static function muraction($request, $context) {
		if (context::getSessionAttribute("user") != null) {
			
			// BUG SESSION
			//$user = utilisateurTable::getUserById(context::getSessionAttribute('user')->id);
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));

			$context->mavariable=$user;

			return context::SUCCESS;
		}
	}

	public static function chataction($request, $context) {
		if (context::getSessionAttribute("user") != null){
			
			// BUG SESSION
			//$user = utilisateurTable::getUserById(context::getSessionAttribute('user')->id);
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));
			$context->mavariable=$user;

			return context::SUCCESS;
		}
		else{
			
		}

	}

	public static function userById($request, $context) {
		$user = utilisateurTable::getUserById(1);
		if ($user == null) {
			$context->mavariable = "ID inconnu";
		}
		else {
			$context->mavariable = $user;
		}
		return context::SUCCESS;
	}


	public static function profil($request, $context) {
		if (context::getSessionAttribute("user") != null) {
			//die(var_dump($context->mavariable->id));
			
			// BUG SESSION
			//$user = utilisateurTable::getUserById(context::getSessionAttribute('user')->id);
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));

			$context->mavariable = $user;
			return context::SUCCESS;
		}
	}



	public static function submit($request, $context) {

		//$user = utilisateurTable::getUserByLoginAndPass($_POST['identifiant'], $_POST['motdepasse']);
		$user = null;
		if(context::getSessionAttribute('user') == null) {
			$user = utilisateurTable::getUserByLoginAndPass($_POST['identifiant'], $_POST['motdepasse']);
		}
		else {
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));
		}

		if ($user === false) {
			$context->mavariable = "identifiant ou mot de passe incorrect";
			return context::ERROR;
		}
/*
		else{
			context::setSessionAttribute('user',$user);
			$context->mavarlayout=$user;

			$users=utilisateurTable::getUsers();
			context::setSessionAttribute('users',$users);
*/
		else {

			// BUG SESSION
			//context::setSessionAttribute('user', $user);
			context::setSessionAttribute('user', $user->id);

			$context->mavariable = $user;
			$users = utilisateurTable::getUsers();
			context::setSessionAttribute('users', $users);

		}
		return context::SUCCESS;
	}

	public static function displayFriendWall($request, $context) {
		$friend = utilisateurTable::getUserById($_GET['friendId']);
		if($friend === false) {
			$context->mavariable = "ERROR";
			return context::ERROR;
		}
		else {
			context::setSessionAttribute('friend', $friend->id);
			$users = utilisateurTable::getUsers();
			context::setSessionAttribute('users', $users);
		}
		return context::SUCCESS;
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
