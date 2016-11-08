<?php

/* Classe Outils en lien avec l'entité utilisateur
	composée de méthodes statiques
*/

class utilisateurTable {

public static function getUserByLoginAndPass($login,$pass){
	$em = dbconnection::getInstance()->getEntityManager() ;
	$userRepository = $em->getRepository('utilisateur');
	$user = $userRepository->findOneBy(array('identifiant' => $login, 'pass' => sha1($pass)));	
	
	if ($user == false){
		echo 'Erreur sql';
	}
	return $user; 
}

public static function getUserById($id){
	$em = dbconnection::getInstance()->getEntityManager() ;
	$userRepository = $em->getRepository('utilisateur');
	$user = $userRepository->findOneBy(array('id' => $id));	
	
	if ($user == false){
		echo 'Erreur sql';
	}
	return $user; 
}

public static function getUsers()
	$em = dbconnection::getInstance()->getEntityManager() ;
	$userRepository = $em->getRepository('utilisateur');
	$users = $userRepository->findAll(array('id' => $id));	

	return $users;
?>
