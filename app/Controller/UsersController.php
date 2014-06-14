<?php

class UsersController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components = array('Session');
	var $name = 'Users';
	
	

	public function index() {
		$this->layout = 'cv';
		$this->set('users', $this->User->find('all'));		
	}
	
	public function add() {
		$this->layout = 'cv';
		$this->User->create();
		if ($this->request->is('post')) {
			if(empty($this->data['User']['picture']['name'])){
				unset($this->request->data['User']['picture']);
			}
			if(!empty($this->data['User']['picture']['name'])) {
					$file=$this->data['User']['picture'];
					$ary_ext=array('jpg','jpeg','gif','png'); //array of allowed extensions
					$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
					if(in_array($ext, $ary_ext)) {
						move_uploaded_file($file['tmp_name'], WWW_ROOT.'img\uploads\\'.$file['name']);
						$this->request->data['User']['picture'] = $file['name'];						
					}
					
			}			
 			if ($this->User->save($this->request->data)) 
 			{
				$this->Session->setFlash('the user has been saved.');
				$this->redirect(array('action' => 'index'));
			}
			else 
			{
				$this->Session->setFlash('Unable to add the user.');
			}
		}
	}
	
	public function edit ($id = null) {
		$this->layout = 'cv';
		if (!$id) {
			throw new NotFoundException(__('please specify the user id'));
		}
		$user = $this->User->findById($id);
		if (!$user) {
			throw new NotFoundException(__('The user id was not found'));
		}
		//------------------------------------------------------------------------------		
		if(!empty($this->data))
		{
			$this->User->id=$id;
			if(empty($this->data['User']['picture']['name'])) {
				unset($this->request->data['User']['picture']);
			}
			if(!empty($this->data['User']['picture']['name'])) {
				if(file_exists("img/uploads/".$this->data['User']['picture'])){
 					unlink("img/uploads/".$this->data['User']['picture']);								
				}
				$file=$this->data['User']['picture'];
				$ary_ext=array('jpg','jpeg','gif','png'); 
				$ext = substr(strtolower(strrchr($file['name'], '.')), 1); 
				if(in_array($ext, $ary_ext)) {
					move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/uploads/' .$file['name']);
					$this->request->data['User']['picture'] = $file['name'];
				}					
			}
				
			if($this->User->save($this->request->data)) {
					$this->Session->setFlash('the user data has been Updated');			
					$this->redirect(array('action'=>'index'));	
				}
			else
			{
				$this->Session->setFlash('Unable to update your post.');
			}
		}
		
		if(!$this->request->data){
			$this->request->data=$user;
		}		
		//--------------------------------------------------------------------------------	
		
	}
}
?>

