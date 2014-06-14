<?php
 class SubjectsController extends AppController{
	public $helpers = array('Html', 'Form','Session');
	public $components = array('Session');
	
	public function index() {
		$this->layout = 'cv';
		$this->set('subjects', $this->Subject->find('all'));		
	}
	public function allCourseSubjects($courseId) {
		$this->layout = 'cv';
		$this->set('subjects', $this->Subject->find('all',array('conditions'=>array('Subject.qualification'=>$courseId))));		
	}
	public function subject($id) {
		$this->layout = 'cv';
		$this->set('subjects', $this->Subject->find('first',array('conditions'=>array('Subject.id'=>$id))));		
	}
	public function add() {
		$this->layout = 'cv';
		if ($this->request->is('post')) {
			$this->Subject->create();
			if ($this->Subject->save($this->request->data)) {
				$this->Session->setFlash(__('Your subject has been added.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to save that information.'));
		}
	}
	public function edit($id) {
		$this->layout = 'cv';

		if (!$id) {
			throw new NotFoundException(__('please enter the valid subject id'));
		}
		$subject = $this->Subject->findById($id);
		if (!$subject) {
			throw new NotFoundException(__('Invalid subject'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Subject->id = $id;
			if ($this->Subject->save($this->request->data)) {
				$this->Session->setFlash(__('the Subject information has been updated.'));
				return $this->redirect(array('action' => array('subject'=>array('id'=>$id))));
			}
			$this->Session->setFlash(__('Unable to update the Subject.'));
		}
		if (!$this->request->data) {
			$this->request->data = $subject;
		}
	}
	public function delete($id) {		
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Subject->delete($id)) {
			$this->Session->setFlash(__('The Subject with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' =>  array('subject'=>array('id'=>$id))));
		}			
	}
	
 }
?>