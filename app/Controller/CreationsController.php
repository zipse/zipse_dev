<?php
App::uses('AppController', 'Controller');
/**
 * Creations Controller
 *
 * @property Creation $Creation
 */
class CreationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Creation->recursive = 0;
		$this->set('creations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Creation->id = $id;
		if (!$this->Creation->exists()) {
			throw new NotFoundException(__('Invalid creation'));
		}
		$this->set('creation', $this->Creation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Creation->create();
			if ($this->Creation->save($this->request->data)) {
				$this->Session->setFlash(__('The creation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The creation could not be saved. Please, try again.'));
			}
		}
		$users = $this->Creation->User->find('list');
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
		$this->Creation->id = $id;
		if (!$this->Creation->exists()) {
			throw new NotFoundException(__('Invalid creation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Creation->save($this->request->data)) {
				$this->Session->setFlash(__('The creation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The creation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Creation->read(null, $id);
		}
		$users = $this->Creation->User->find('list');
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
		$this->Creation->id = $id;
		if (!$this->Creation->exists()) {
			throw new NotFoundException(__('Invalid creation'));
		}
		if ($this->Creation->delete()) {
			$this->Session->setFlash(__('Creation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Creation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Creation->recursive = 0;
		$this->set('creations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Creation->id = $id;
		if (!$this->Creation->exists()) {
			throw new NotFoundException(__('Invalid creation'));
		}
		$this->set('creation', $this->Creation->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Creation->create();
			if ($this->Creation->save($this->request->data)) {
				$this->Session->setFlash(__('The creation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The creation could not be saved. Please, try again.'));
			}
		}
		$users = $this->Creation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Creation->id = $id;
		if (!$this->Creation->exists()) {
			throw new NotFoundException(__('Invalid creation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Creation->save($this->request->data)) {
				$this->Session->setFlash(__('The creation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The creation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Creation->read(null, $id);
		}
		$users = $this->Creation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Creation->id = $id;
		if (!$this->Creation->exists()) {
			throw new NotFoundException(__('Invalid creation'));
		}
		if ($this->Creation->delete()) {
			$this->Session->setFlash(__('Creation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Creation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
