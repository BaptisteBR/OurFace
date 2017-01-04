<?php

/* Classe Outils en lien avec l'entité message
	composée de méthodes statiques
*/

class messageTable {

	public static function getMessagesByUserId($id) {
		$em = dbconnection::getInstance()->getEntityManager();
		$userRepository = $em->getRepository('message');
		$user = $userRepository->findByEmetteur(array('id' => $id));	
		
		if ($user == false) {
			echo 'Erreur sql';
		}
		return $user; 
	}
}

?>