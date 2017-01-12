<?php

/* Classe Outils en lien avec l'entité message
	composée de méthodes statiques
*/

class messageTable {

	public static function getMessagesByUserId($id) {
		$em = dbconnection::getInstance()->getEntityManager();
		$repository = $em->getRepository('message');
		$messages = $repository->findByEmetteur(array('id' => $id));	
		
		if ($messages == false) {
			echo 'Erreur sql';
		}
		return $user; 
	}

	public static function addMessage($idEmetteur, $idDestinataire, $idParent, $message) {

		$emetteur = getUserById($idEmetteur);
		$destinataire = getUserById($idDestinataire);
		$parent = getUserById($idParent);

		$post = new post();
		$post->text = $message;
		$post->date = new date('Y-m-d H:i:s');

		$message = new message();
		$message->emetteur = $emetteur;
		$message->destinataire = $destinataire;
		$message->parent = $parent;
		$message->post = $post;

		$em = dbconnection::getInstance()->getEntityManager();
				
		$em->persist($message);
		$em.flush();

	}
}

?>