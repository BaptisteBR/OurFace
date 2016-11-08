<?php

/* Classe Outils en lien avec l'entité chat
	composée de méthodes statiques
*/

class chatTable {

	public static function getChats() {
		$em = dbconnection::getInstance()->getEntityManager();
		$chatRepository = $em->getRepository('chat');
		$chats = $chatRepository->findAll();	
	
		if ($chats == false) {
			echo 'Erreur sql';
		}
		return $chats;
	}

	public static function getLastChat() {
		$em = dbconnection::getInstance()->getEntityManager();
		$chatRepository = $em->getRepository('chat');
		//$chat = $chatRepository->findOneBy();

		if($chat == false) {
			echo 'Erreur sql';
		}
		return $chat;
	}
}

?>