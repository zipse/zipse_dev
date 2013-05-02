<?php
App::uses('AppController', 'Controller');
/**
 * Creations Controller
 *
 */
class CreationsController extends AppController {


	function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

}
