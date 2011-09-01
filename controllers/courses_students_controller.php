<?php
class CoursesStudentsController extends AppController {

	var $name = 'CoursesStudents';

	function index() {
		$this->CoursesStudent->recursive = 0;
		$this->set('coursesStudents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid courses student', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('coursesStudent', $this->CoursesStudent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CoursesStudent->create();
			if ($this->CoursesStudent->save($this->data)) {
				$this->Session->setFlash(__('The courses student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses student could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid courses student', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CoursesStudent->save($this->data)) {
				$this->Session->setFlash(__('The courses student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses student could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CoursesStudent->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for courses student', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CoursesStudent->delete($id)) {
			$this->Session->setFlash(__('Courses student deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Courses student was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
