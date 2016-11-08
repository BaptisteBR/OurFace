<?php

/** 
 * @Entity
 * @Table(name="fredouil.message")
 */
class message{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/**
	* @OneToOne(targetEntity="fredouil.utilisateur")
	* @JoinColumn(name='emetteur', referencedColumnName ='id')
	*/
	public $emetteur;
		
	/**
	* @OneToOne(targetEntity="fredouil.utilisateur")
	* @JoinColumn(name='destinataire', referencedColumnName ='id')
	*/
	public $destinataire;

	/**
	* @OneToOne(targetEntity="fredouil.utilisateur")
	* @JoinColumn(name='parent', referencedColumnName ='id')
	*/
	public $parent;
	
	/** @Column(type="integer") */ 
	public $post;

	/** @Column(type="integer") */ 
	public $aimer;

}

?>
