<?php
class InstructorsController extends AppController {

	var $name = 'Instructors';

	function index() {
		$this->Instructor->recursive = 0;
		$this->set('instructors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid instructor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('instructor', $this->Instructor->read(null, $id));
	}

	function add($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Request', true));
			$this->redirect(array('controller' => 'users', 'action' => 'add'));
		}
		
		if (!empty($this->data)) {
			$this->Instructor->create();
			if ($this->Instructor->save($this->data)) {
				$this->Session->setFlash(__('The instructor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instructor could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Instructor->User->find('list');
		$this->set(compact('users'));
		$this->set('user_id', $id);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid instructor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Instructor->save($this->data)) {
				$this->Session->setFlash(__('The instructor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instructor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Instructor->read(null, $id);
		}
		$users = $this->Instructor->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for instructor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Instructor->delete($id)) {
			$this->Session->setFlash(__('Instructor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Instructor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
