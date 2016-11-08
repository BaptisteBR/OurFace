<?php

/** 
 * @Entity
 * @Table(name="fredouil.post")
 */
class post{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @Column(type="text") */ 
	public $emetteur;
		
	/** @Column(type="timestamp") */ 
	public $destinataire;

	/** @Column(type="string", length=45) */ 
	public $parent;
	
	public $post;

	public $aimer;
}

?>
