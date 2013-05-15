<?php
App::uses('AppController', 'Controller');
/**
 * Conversions Controller
 *
 * @property Conversion $Conversion
 */
class ConversionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Conversion->recursive = 0;
		$this->set('conversions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Conversion->id = $id;
		if (!$this->Conversion->exists()) {
			throw new NotFoundException(__('Invalid conversion'));
		}
		$this->set('conversion', $this->Conversion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Conversion->create();
			if ($this->Conversion->save($this->request->data)) {
				$this->Session->setFlash(__('The conversion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conversion could not be saved. Please, try again.'));
			}
		}
		$users = $this->Conversion->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Conversion->id = $id;
		if (!$this->Conversion->exists()) {
			throw new NotFoundException(__('Invalid conversion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Conversion->save($this->request->data)) {
				$this->Session->setFlash(__('The conversion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conversion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Conversion->read(null, $id);
		}
		$users = $this->Conversion->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Conversion->id = $id;
		if (!$this->Conversion->exists()) {
			throw new NotFoundException(__('Invalid conversion'));
		}
		if ($this->Conversion->delete()) {
			$this->Session->setFlash(__('Conversion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Conversion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
