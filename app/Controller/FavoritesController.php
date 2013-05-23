<?php
App::uses('AppController', 'Controller');
/**
 * Favorites Controller
 *
 * @property Favorite $Favorite
 */
class FavoritesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Favorite->recursive = 0;
		$this->set('favorites', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Favorite->id = $id;
		if (!$this->Favorite->exists()) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		$this->set('favorite', $this->Favorite->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Favorite->create();
			if ($this->Favorite->save($this->request->data)) {
				$this->Session->setFlash(__('The favorite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorite could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Favorite->id = $id;
		if (!$this->Favorite->exists()) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Favorite->save($this->request->data)) {
				$this->Session->setFlash(__('The favorite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorite could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Favorite->read(null, $id);
		}
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
		$this->Favorite->id = $id;
		if (!$this->Favorite->exists()) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		if ($this->Favorite->delete()) {
			$this->Session->setFlash(__('Favorite deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Favorite was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Favorite->recursive = 0;
		$this->set('favorites', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Favorite->id = $id;
		if (!$this->Favorite->exists()) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		$this->set('favorite', $this->Favorite->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Favorite->create();
			if ($this->Favorite->save($this->request->data)) {
				$this->Session->setFlash(__('The favorite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorite could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Favorite->id = $id;
		if (!$this->Favorite->exists()) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Favorite->save($this->request->data)) {
				$this->Session->setFlash(__('The favorite has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorite could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Favorite->read(null, $id);
		}
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
		$this->Favorite->id = $id;
		if (!$this->Favorite->exists()) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		if ($this->Favorite->delete()) {
			$this->Session->setFlash(__('Favorite deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Favorite was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
