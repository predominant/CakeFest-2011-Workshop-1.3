<?php
class UploadsController extends AppController {

	var $name = 'Uploads';

	function index() {
		$this->Upload->recursive = 0;
		$this->set('uploads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid upload', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('upload', $this->Upload->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Upload->create();
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		$courses = $this->Upload->Course->find('list');
		$this->set(compact('courses'));
	}
	
	public function download($id = null) {
		$upload = $this->Upload->read(null, $id);
		
		// Check to see if the record existed. If not, send them back to the index
		if (empty($upload)) {
			$this->Session->setFlash('Unknown File');
			$this->redirect(array('action' => 'index'));
		}
		
		$this->view = 'media';

		$filename = $upload['Upload']['filename'];
		$this->set(array(
			'id' => $upload['Upload']['id'],
			'name' => substr($filename, 0, strrpos($filename, '.')),
			'extension' => substr(strrchr($filename, '.'), 1),
			'path' => APP.'uploads'.DS,
			'download' => !(isset($this->params['named']['view']) && $this->params['named']['view']),
		));

	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid upload', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Upload->read(null, $id);
		}
		$courses = $this->Upload->Course->find('list');
		$this->set(compact('courses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for upload', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Upload->delete($id)) {
			$this->Session->setFlash(__('Upload deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Upload was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
