<?php

/** 
 * @Entity
 * @Table(name="fredouil.chat")
 */
class chat {

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */
	public $id;

	/**
	 * @OneToOne(targetEntity="fredouil.utilisateur")
	 * @JoinColumn(name="emetteur", referencedColumnName="id")
	 */
	public $emetteur;

	/**
	 * @OneToOne(targetEntity="fredouil.post")
	 * @JoinColumn(name="post", referencedColumnName="id")
	 */
	public $post;
}

?>