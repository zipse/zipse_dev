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

			
			// check if they've made directories yet
			$dir = APP.WEBROOT_DIR.'/files/'. $uid.'/conversions/';
			
			
			if(!is_dir($dir))	mkdir($dir, '777');
			if(!is_dir($dir))
			{
				$this->Session->setFlash('That conversions directory cannot be created');
				$this->redirect($this->request->here);
			}
			
			
			$destination = $dir.'outputs/';
			
			if(!is_dir($destination))	mkdir($destination, '755');
			if(!is_dir($destination))
			{
				$this->Session->setFlash('That conversions directory cannot be created');
				$this->redirect($this->request->here);
			}

			// path to move file
			$dir = $dir.'inputs/';
			$path = $dir.$file['name'];

			if(!is_dir($dir))	mkdir($dir, '777');
			if(!is_dir($dir))
			{
				$this->Session->setFlash('That input directory cannot be created');
				$this->redirect($this->request->here);
			}
		   
		
		    //var_dump($path);die();
			if(move_uploaded_file($file['tmp_name'], $path))
			{
				var_dump($file['name']);
				var_dump($file);	
				
				if(!preg_match('/\.(mp3|wav|flac|aiff)$/', $file['name'], $currentExt))
				{
					// file extension is gravy
					$this->Session->setFlash('That is not a supported music type');
					$this->redirect($this->request->here);

				}
				if(!preg_match('/^audio\/[mp3|wav|flac|aiff]/', $file['type'])) 
				{
					// check if meme type is gravy
					$this->Session->setFlash('What are you trying to do? noob');
					$this->redirect($this->request->here);
					
				}else{
					// pass all tests
					var_dump($this->request->data);
					$newExt = $this->request->data['Conversion']['output'];
					$newName = substr_replace($file['name'], $newExt, -3);
					var_dump($destination.$newName);die();	
					exec('sox '.$path.'  '.$destination.$newName, $output);
				}



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
