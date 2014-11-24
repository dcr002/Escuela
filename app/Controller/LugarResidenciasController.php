<?php
App::uses('AppController', 'Controller');
/**
 * LugarResidencias Controller
 *
 * @property LugarResidencia $LugarResidencia
 * @property PaginatorComponent $Paginator
 */
class LugarResidenciasController extends AppController {

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
		$this->LugarResidencia->recursive = 0;
		$this->set('lugarResidencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LugarResidencia->exists($id)) {
			throw new NotFoundException(__('Invalid lugar residencia'));
		}
		$options = array('conditions' => array('LugarResidencia.' . $this->LugarResidencia->primaryKey => $id));
		$this->set('lugarResidencia', $this->LugarResidencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LugarResidencia->create();
			if ($this->LugarResidencia->save($this->request->data)) {
				$this->Session->setFlash(__('The lugar residencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugar residencia could not be saved. Please, try again.'));
			}
		}
		$estados = $this->LugarResidencia->Estado->find('list', array('fields'=>array('id', 'estado')));
		$alumnos = $this->LugarResidencia->Alumno->find('list');
		$this->set(compact('estados', 'alumnos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LugarResidencia->exists($id)) {
			throw new NotFoundException(__('Invalid lugar residencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LugarResidencia->save($this->request->data)) {
				$this->Session->setFlash(__('The lugar residencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugar residencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LugarResidencia.' . $this->LugarResidencia->primaryKey => $id));
			$this->request->data = $this->LugarResidencia->find('first', $options);
		}
		$estados = $this->LugarResidencia->Estado->find('list');
		$alumnos = $this->LugarResidencia->Alumno->find('list');
		$this->set(compact('estados', 'alumnos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LugarResidencia->id = $id;
		if (!$this->LugarResidencia->exists()) {
			throw new NotFoundException(__('Invalid lugar residencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LugarResidencia->delete()) {
			$this->Session->setFlash(__('The lugar residencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lugar residencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
