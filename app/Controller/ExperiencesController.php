<?php
class ExperiencesController Extends AppController{
	
	public $helpers = array('Html', 'Form','Session');
	public $components = array('Session');
	var $name = 'Experiences';
	
	public function index() {
		$this->set('experiences', $this->Experience->find('all'));
		$this->layout = 'cv';
	}
	
	public function add() {
		$this->layout = 'cv';
		if ($this->request->is('post')) {
			$this->Experience->create();
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('Your experience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to save that experience'));
		}
	}
	public function edit($id) {
		$this->layout = 'cv';
		if (!$id) {
			throw new NotFoundException(__('please enter the valid id'));
		}
		$post = $this->Experience->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid qualification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Experience->id = $id;
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('the experience information has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update the experience post.'));
		}
		if (!$this->request->data) {
			$this->request->data = $post;

		}
	}
	public function delete($id) {
		$this->layout = 'cv';
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Experience->delete($id)) {
			$this->Session->setFlash(__('The experience with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}			
	}
}
?>