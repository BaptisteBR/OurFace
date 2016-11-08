<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController{

	public static function helloWorld($request,$context){
		$context->mavariable="hello world";
		return context::SUCCESS;
	}

	public static function login($request,$context){
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
