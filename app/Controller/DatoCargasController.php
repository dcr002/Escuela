<?php
App::uses('AppController', 'Controller');
/**
 * DatoCargas Controller
 *
 * @property DatoCarga $DatoCarga
 * @property PaginatorComponent $Paginator
 */
class DatoCargasController extends AppController {

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
		$this->DatoCarga->recursive = 0;
		$this->set('datoCargas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatoCarga->exists($id)) {
			throw new NotFoundException(__('Invalid dato carga'));
		}
		$options = array('conditions' => array('DatoCarga.' . $this->DatoCarga->primaryKey => $id));
		$this->set('datoCarga', $this->DatoCarga->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatoCarga->create();
			if ($this->DatoCarga->save($this->request->data)) {
				$this->Session->setFlash(__('The dato carga has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato carga could not be saved. Please, try again.'));
			}
		}
		$datoRepresentantes = $this->DatoCarga->DatoRepresentante->find('list');
		$this->set(compact('datoRepresentantes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DatoCarga->exists($id)) {
			throw new NotFoundException(__('Invalid dato carga'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DatoCarga->save($this->request->data)) {
				$this->Session->setFlash(__('The dato carga has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato carga could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatoCarga.' . $this->DatoCarga->primaryKey => $id));
			$this->request->data = $this->DatoCarga->find('first', $options);
		}
		$datoRepresentantes = $this->DatoCarga->DatoRepresentante->find('list');
		$this->set(compact('datoRepresentantes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DatoCarga->id = $id;
		if (!$this->DatoCarga->exists()) {
			throw new NotFoundException(__('Invalid dato carga'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DatoCarga->delete()) {
			$this->Session->setFlash(__('The dato carga has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dato carga could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
