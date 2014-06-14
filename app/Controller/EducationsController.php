<?php
class EducationsController Extends AppController{

	public $helpers = array('Html', 'Form','Session');
	public $components = array('Session');
	var $name = 'Educations';
	
	public function index() {
		$this->set('educations', $this->Education->find('all'));
		$this->layout = 'cv';
	}
	public function add() {
		$this->layout = 'cv';
		if ($this->request->is('post')) {
			$this->Education->create();
			if ($this->Education->save($this->request->data)) {
				$this->Session->setFlash(__('Your education infomation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to save that information.'));
		}
	}
	public function edit($id) {
		$this->layout = 'cv';
		if (!$id) {
			throw new NotFoundException(__('please enter the qualification id'));
		}
		$post = $this->Education->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid qualification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Education->id = $id;
			if ($this->Education->save($this->request->data)) {
				$this->Session->setFlash(__('the qualification has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update the qualification post.'));
		}
		if (!$this->request->data) {
			$this->request->data = $post;

		}
	}	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Education->delete($id)) {
			$this->Session->setFlash(__('The qualification with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}			
	}
}

?>