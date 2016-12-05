<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController{

	public static function helloWorld($request,$context){
		$lastchat=chatTable::getLastChat();
		$context->mavariable=$lastchat->post->texte;
		return context::SUCCESS;
	}

	public static function login($request,$context){
		return context::SUCCESS;
	}


	public static function listeAmis($request,$context){
		if (context::getSessionAttribute("user")!=null){
			$users=utilisateurTable::getUsers();
			$context->tabuser=$users;
			return context::SUCCESS;
		}
		else{
		}
	}

	public static function muraction($request,$context){
		if (context::getSessionAttribute("user")!=null){
			$user=utilisateurTable::getUserById(context::getSessionAttribute('user')->id);
			$context->mavariable=$user;

			return context::SUCCESS;
		}

	}

	public static function chataction($request,$context){
		if (context::getSessionAttribute("user")!=null){
			$user=utilisateurTable::getUserById(context::getSessionAttribute('user')->id);
			$context->mavariable=$user;

			return context::SUCCESS;
		}

	}

	public static function menu($request,$context){
		return context::SUCCESS;
	}

	public static function showmessage($request,$context){
		$user=utilisateurTable::getUserById(42);
		$context->mavariable=$user->messages;
		return context::SUCCESS;
	}

	public static function userById($request,$context){
		$user=utilisateurTable::getUserById(1);
		if($user==null){
			$context->mavariable="ID inconnu";
		}
		else{
			$context->mavariable=$user;
		}
		return context::SUCCESS;
	}

	public static function profil($request,$context){
		if (context::getSessionAttribute("user")!=null){
			//die(var_dump($context->mavariable->id));
			$user=utilisateurTable::getUserById(context::getSessionAttribute('user')->id);
			$context->mavariable=$user;
			return context::SUCCESS;
		}
	}


	public static function submit($request,$context){
		$user=utilisateurTable::getUserByLoginAndPass($_POST['identifiant'],$_POST['motdepasse']);
		if($user===false){
			$context->mavariable="identifiant ou mot de passe incorrect";

			return context::ERROR;
		}
		else{
			context::setSessionAttribute('user',$user);
			$context->mavariable=$user;
			$users=utilisateurTable::getUsers();
			context::setSessionAttribute('users',$users);
		}
		return context::SUCCESS;
	}

	public static function index($request,$context){
		
		return context::SUCCESS;
	}

	public static function connect($request,$context){
		context::setSessionAttribute('user',null);
		return context::SUCCESS;
	}
	
	public static function logout($request,$context){
		context::setSessionAttribute('user',null);
		return context::SUCCESS;
	}
}
