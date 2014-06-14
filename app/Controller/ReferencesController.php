<?php
class ReferencesController extends AppController{
	public $helpers = array('Html', 'Form','Session');
	public $components = array('Session');
	var $name = 'References';
	
	public function index() {
		$this->set('references', $this->Reference->find('all'));
		$this->layout = 'cv';
	}
	public function add() {
		$this->layout = 'cv';
		if ($this->request->is('post')) {
			$this->Reference->create();
			if ($this->Reference->save($this->request->data)) {
				$this->Session->setFlash(__('Your reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to save the Reference'));
		}
	}
	public function edit($id) {
		$this->layout = 'cv';
		if (!$id) {
			throw new NotFoundException(__('please enter the valid id'));
		}
		$post = $this->Reference->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid reference'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Reference->id = $id;
			if ($this->Reference->save($this->request->data)) {
				$this->Session->setFlash(__('the reference information has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update the reference.'));
		}
		if (!$this->request->data) {
			$this->request->data = $post;

		}
	}
	public function delete($id) {		
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Reference->delete($id)) {
			$this->Session->setFlash(__('The reference with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}			
	}

}

?>