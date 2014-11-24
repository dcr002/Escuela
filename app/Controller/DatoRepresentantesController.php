<?php
App::uses('AppController', 'Controller');
/**
 * DatoRepresentantes Controller
 *
 * @property DatoRepresentante $DatoRepresentante
 * @property PaginatorComponent $Paginator
 */
class DatoRepresentantesController extends AppController {

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
		$this->DatoRepresentante->recursive = 0;
		$this->set('datoRepresentantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatoRepresentante->exists($id)) {
			throw new NotFoundException(__('Invalid dato representante'));
		}
		$options = array('conditions' => array('DatoRepresentante.' . $this->DatoRepresentante->primaryKey => $id));
		$this->set('datoRepresentante', $this->DatoRepresentante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatoRepresentante->create();
			if ($this->DatoRepresentante->save($this->request->data)) {
				$this->Session->setFlash(__('The dato representante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato representante could not be saved. Please, try again.'));
			}
		}
		$lugarNacimientos = $this->DatoRepresentante->LugarNacimiento->find('list');
		$alumnos = $this->DatoRepresentante->Alumno->find('list');
		$this->set(compact('lugarNacimientos', 'alumnos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DatoRepresentante->exists($id)) {
			throw new NotFoundException(__('Invalid dato representante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DatoRepresentante->save($this->request->data)) {
				$this->Session->setFlash(__('The dato representante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato representante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatoRepresentante.' . $this->DatoRepresentante->primaryKey => $id));
			$this->request->data = $this->DatoRepresentante->find('first', $options);
		}
		$lugarNacimientos = $this->DatoRepresentante->LugarNacimiento->find('list');
		$alumnos = $this->DatoRepresentante->Alumno->find('list');
		$this->set(compact('lugarNacimientos', 'alumnos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DatoRepresentante->id = $id;
		if (!$this->DatoRepresentante->exists()) {
			throw new NotFoundException(__('Invalid dato representante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DatoRepresentante->delete()) {
			$this->Session->setFlash(__('The dato representante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dato representante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
