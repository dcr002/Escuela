<?php
App::uses('AppController', 'Controller');
/**
 * DatoViviendas Controller
 *
 * @property DatoVivienda $DatoVivienda
 * @property PaginatorComponent $Paginator
 */
class DatoViviendasController extends AppController {

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
		$this->DatoVivienda->recursive = 0;
		$this->set('datoViviendas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatoVivienda->exists($id)) {
			throw new NotFoundException(__('Invalid dato vivienda'));
		}
		$options = array('conditions' => array('DatoVivienda.' . $this->DatoVivienda->primaryKey => $id));
		$this->set('datoVivienda', $this->DatoVivienda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatoVivienda->create();
			if ($this->DatoVivienda->save($this->request->data)) {
				$this->Session->setFlash(__('The dato vivienda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato vivienda could not be saved. Please, try again.'));
			}
		}
		$datoRepresentantes = $this->DatoVivienda->DatoRepresentante->find('list');
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
		if (!$this->DatoVivienda->exists($id)) {
			throw new NotFoundException(__('Invalid dato vivienda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DatoVivienda->save($this->request->data)) {
				$this->Session->setFlash(__('The dato vivienda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato vivienda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatoVivienda.' . $this->DatoVivienda->primaryKey => $id));
			$this->request->data = $this->DatoVivienda->find('first', $options);
		}
		$datoRepresentantes = $this->DatoVivienda->DatoRepresentante->find('list');
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
		$this->DatoVivienda->id = $id;
		if (!$this->DatoVivienda->exists()) {
			throw new NotFoundException(__('Invalid dato vivienda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DatoVivienda->delete()) {
			$this->Session->setFlash(__('The dato vivienda has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dato vivienda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
