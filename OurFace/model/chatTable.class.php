<?php

/* Classe Outils en lien avec l'entité chat
	composée de méthodes statiques
*/
/* By Baptiste */
class chatTable {
/* By Baptiste */
	public static function getChats() {
		$em = dbconnection::getInstance()->getEntityManager();
		$chatRepository = $em->getRepository('chat');
		$chats = $chatRepository->findAll();	
	
		if ($chats == false) {
			echo 'Erreur sql';
		}
		return $chats;
	}
/* By Baptiste */
	public static function getLastChat() {
		$em = dbconnection::getInstance()->getEntityManager();

		$query = $em->createQuery("
				select * from fredouil.chat where fredouil.chat.id in (
					select max(fredouil.chat.id) from fredouil.chat
				)
		");
		$chat = $query->getResult();

		if ($chat == false) {
			echo 'Erreur sql';
		}
		return $chat;
	}
}

?>