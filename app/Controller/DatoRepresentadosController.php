<?php
App::uses('AppController', 'Controller');
/**
 * DatoRepresentados Controller
 *
 * @property DatoRepresentado $DatoRepresentado
 * @property PaginatorComponent $Paginator
 */
class DatoRepresentadosController extends AppController {

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
		$this->DatoRepresentado->recursive = 0;
		$this->set('datoRepresentados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatoRepresentado->exists($id)) {
			throw new NotFoundException(__('Invalid dato representado'));
		}
		$options = array('conditions' => array('DatoRepresentado.' . $this->DatoRepresentado->primaryKey => $id));
		$this->set('datoRepresentado', $this->DatoRepresentado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatoRepresentado->create();
			if ($this->DatoRepresentado->save($this->request->data)) {
				$this->Session->setFlash(__('The dato representado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato representado could not be saved. Please, try again.'));
			}
		}
		$datoRepresentantes = $this->DatoRepresentado->DatoRepresentante->find('list');
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
		if (!$this->DatoRepresentado->exists($id)) {
			throw new NotFoundException(__('Invalid dato representado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DatoRepresentado->save($this->request->data)) {
				$this->Session->setFlash(__('The dato representado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato representado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatoRepresentado.' . $this->DatoRepresentado->primaryKey => $id));
			$this->request->data = $this->DatoRepresentado->find('first', $options);
		}
		$datoRepresentantes = $this->DatoRepresentado->DatoRepresentante->find('list');
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
		$this->DatoRepresentado->id = $id;
		if (!$this->DatoRepresentado->exists()) {
			throw new NotFoundException(__('Invalid dato representado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DatoRepresentado->delete()) {
			$this->Session->setFlash(__('The dato representado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dato representado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
