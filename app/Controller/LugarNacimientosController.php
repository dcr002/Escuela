<?php
App::uses('AppController', 'Controller');
/**
 * LugarNacimientos Controller
 *
 * @property LugarNacimiento $LugarNacimiento
 * @property PaginatorComponent $Paginator
 */
class LugarNacimientosController extends AppController {

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
		$this->LugarNacimiento->recursive = 0;
		$this->set('lugarNacimientos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LugarNacimiento->exists($id)) {
			throw new NotFoundException(__('Invalid lugar nacimiento'));
		}
		$options = array('conditions' => array('LugarNacimiento.' . $this->LugarNacimiento->primaryKey => $id));
		$this->set('lugarNacimiento', $this->LugarNacimiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LugarNacimiento->create();
			if ($this->LugarNacimiento->save($this->request->data)) {
				$this->Session->setFlash(__('The lugar nacimiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugar nacimiento could not be saved. Please, try again.'));
			}
		}
		$estados = $this->LugarNacimiento->Estado->find('list');
		$alumnos = $this->LugarNacimiento->Alumno->find('list');
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
		if (!$this->LugarNacimiento->exists($id)) {
			throw new NotFoundException(__('Invalid lugar nacimiento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LugarNacimiento->save($this->request->data)) {
				$this->Session->setFlash(__('The lugar nacimiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugar nacimiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LugarNacimiento.' . $this->LugarNacimiento->primaryKey => $id));
			$this->request->data = $this->LugarNacimiento->find('first', $options);
		}
		$estados = $this->LugarNacimiento->Estado->find('list');
		$alumnos = $this->LugarNacimiento->Alumno->find('list');
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
		$this->LugarNacimiento->id = $id;
		if (!$this->LugarNacimiento->exists()) {
			throw new NotFoundException(__('Invalid lugar nacimiento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LugarNacimiento->delete()) {
			$this->Session->setFlash(__('The lugar nacimiento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lugar nacimiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
