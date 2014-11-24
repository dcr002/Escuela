<?php
App::uses('AppController', 'Controller');
/**
 * DatoPadres Controller
 *
 * @property DatoPadre $DatoPadre
 * @property PaginatorComponent $Paginator
 */
class DatoPadresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DatoPadre->recursive = 0;
		$this->set('datoPadres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatoPadre->exists($id)) {
			throw new NotFoundException(__('Invalid dato padre'));
		}
		$options = array('conditions' => array('DatoPadre.' . $this->DatoPadre->primaryKey => $id));
		$this->set('datoPadre', $this->DatoPadre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatoPadre->create();
			if ($this->DatoPadre->save($this->request->data)) {
				$this->Session->setFlash(__('The dato padre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato padre could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->DatoPadre->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DatoPadre->exists($id)) {
			throw new NotFoundException(__('Invalid dato padre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DatoPadre->save($this->request->data)) {
				$this->Session->setFlash(__('The dato padre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato padre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatoPadre.' . $this->DatoPadre->primaryKey => $id));
			$this->request->data = $this->DatoPadre->find('first', $options);
		}
		$alumnos = $this->DatoPadre->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DatoPadre->id = $id;
		if (!$this->DatoPadre->exists()) {
			throw new NotFoundException(__('Invalid dato padre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DatoPadre->delete()) {
			$this->Session->setFlash(__('The dato padre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dato padre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
