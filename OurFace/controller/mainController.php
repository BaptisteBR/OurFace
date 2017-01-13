<?php

/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController {

	/* Action en Prod */


	public static function amis($request, $context) {
		if (context::getSessionAttribute("user") != null) {
			$users = utilisateurTable::getUsers();
			$context->users = $users;
			return context::SUCCESS;
		}
		$context->error = "amis";
		return context::ERROR;
	}

	public static function mur($request, $context) {
		if (isset($_POST["friend"])) {
			$friend = utilisateurTable::getUserById($_POST["friend"]);
			$context->friend = $friend;
			context::setSessionAttribute("friend", $friend->id);
			return context::NONE;
		}
		if (context::getSessionAttribute("user") != null) {
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));
			$context->user = $user;
			return context::NONE;
		}
		$context->error = "mur";
		return context::ERROR;
	}

	public static function chat($request, $context) {
		if (context::getSessionAttribute("user") != null) {
			$chats = chatTable::getChats();
			$context->chats = $chats;
			return context::SUCCESS;
		}
		$context->error = "chat";
		return context::ERROR;

	}

	public static function profil($request, $context) {
		if (isset($_POST["friend"])) {
			$friend = utilisateurTable::getUserById($_POST["friend"]);
			$context->friend = $friend;
			return context::NONE;
		}
		if (context::getSessionAttribute("user") != null) {
			$user = utilisateurTable::getUserById(context::getSessionAttribute('user'));
			$context->user = $user;
			return context::NONE;
		}
		$context->error = "profil";
		return context::ERROR;
	}

	public static function submit($request, $context) {
		$user = false;
		if (context::getSessionAttribute("user") == null) {
			if(!empty($_POST["identifiant"]) && !empty($_POST["motdepasse"])) {
				$user = utilisateurTable::getUserByLoginAndPass($_POST["identifiant"], $_POST["motdepasse"]);
				if($user === false) {
					$context->views[] = "connect";
					$context->error = "submit";
					return context::ERROR;
				}
			}
			else {
				$context->views[] = "connect";
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
		$context->views[] = "profil";
		$context->views[] = "mur";
		$context->views[] = "amis";
		$context->views[] = "chat";		
		return context::SUCCESS;
	}

	public static function connect($request, $context) {
		context::setSessionAttribute('user', null);
		$context->views[] = "connect";
		return context::SUCCESS;
	}
	
	public static function logout($request, $context) {
		context::setSessionAttribute('user', null);
		$context->views[] = "connect";
		return context::SUCCESS;
	}
}
