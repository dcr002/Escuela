<?php
App::uses('AppController', 'Controller');
/**
 * Seccions Controller
 *
 * @property Seccion $Seccion
 * @property PaginatorComponent $Paginator
 */
class SeccionsController extends AppController {

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
		$this->Seccion->recursive = 0;
		$this->set('seccions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Seccion->exists($id)) {
			throw new NotFoundException(__('Invalid seccion'));
		}
		$options = array('conditions' => array('Seccion.' . $this->Seccion->primaryKey => $id));
		$this->set('seccion', $this->Seccion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Seccion->create();
			if ($this->Seccion->save($this->request->data)) {
				$this->Session->setFlash(__('Sección Asignada al Grado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sección no Asignada.'));
			}
		}
		$grados = $this->Seccion->Grado->find('list', array('fields'=>array('id', 'grado')));
		$this->set(compact('grados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Seccion->exists($id)) {
			throw new NotFoundException(__('Invalid seccion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Seccion->save($this->request->data)) {
				$this->Session->setFlash(__('Sección Asignada al Grado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sección no Asignada'));
			}
		} else {
			$options = array('conditions' => array('Seccion.' . $this->Seccion->primaryKey => $id));
			$this->request->data = $this->Seccion->find('first', $options);
		}
		$grados = $this->Seccion->Grado->find('list', array('fields'=>array('id', 'grado')));
		$this->set(compact('grados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Seccion->id = $id;
		if (!$this->Seccion->exists()) {
			throw new NotFoundException(__('Invalid seccion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Seccion->delete()) {
			$this->Session->setFlash(__('The seccion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The seccion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
