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

	public static function showmessage($request,$context){
		$user=utilisateurTable::getUserById(1);
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


	public static function submit($request,$context){
		$user=utilisateurTable::getUserByLoginAndPass($_POST['identifiant'],$_POST['motdepasse']);
		if(!$user){
			$context->mavariable="identifiant ou mot de passe incorrect";
		}
		else{
			context::setSessionAttribute('user',$user);
			$context->mavariable=$user;
		}
		return context::SUCCESS;
	}

	public static function index($request,$context){
			
		return context::SUCCESS;
	}

}
