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
		    
		    // grab file if there is one
		    if(isset($this->request->data['Conversion']['file'])) $file = $this->request->data['Conversion']['file'];
		    $uid = $this->request->data['Conversion']['user_id'];
		    
		    // path to move file
		    $dir = APP.WEBROOT_DIR.'/files/'. $uid.'/conversions/input/';
		    $path = $dir.$file['name'];
		    
		    if(!is_dir($dir))	mkdir($dir);
		   
		
		    //var_dump($path);die();
		    if(move_uploaded_file($file['tmp_name'], $path))
		    {
			$currentExt = preg_match('/\.(mp3|wav|flac|aiff)/', $file['name']);
			var_dump($currentExt);
			die();
			
			exec('sox '.$path, $output);
			
		    }else{die();}
		    
			$name =$this->convert();
			$this->Conversion->create();
			if ($this->Conversion->save($this->request->data)) {
				$this->Session->setFlash(__('The conversion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conversion could not be saved. Please, try again.'));
			}
		}
		$users = $this->Conversion->User->find('list');
		$outputs = array(array('mp3' => 'mp3', 'wav' => 'wav', 'flac' => 'flac', 'aiff' => 'aiff'));
		
		$this->set(compact('users', 'outputs'));
	}

/**
 * convert method
 *
 * @return void
 */
	
	    public function convert()
	    {
//		var_dump($this->request);
		$name = '';
		return $name;
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
