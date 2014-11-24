<?php
App::uses('AppController', 'Controller');
/**
 * Matriculas Controller
 *
 * @property Matricula $Matricula
 * @property PaginatorComponent $Paginator
 */
class MatriculasController extends AppController {

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
		$this->Matricula->recursive = 0;
		$this->set('matriculas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Matricula->exists($id)) {
			throw new NotFoundException(__('Invalid matricula'));
		}
		$options = array('conditions' => array('Matricula.' . $this->Matricula->primaryKey => $id));
		$this->set('matricula', $this->Matricula->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Matricula->create();
			if ($this->Matricula->save($this->request->data)) {
				$this->Session->setFlash(__('The matricula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matricula could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Matricula->exists($id)) {
			throw new NotFoundException(__('Invalid matricula'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Matricula->save($this->request->data)) {
				$this->Session->setFlash(__('The matricula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matricula could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Matricula.' . $this->Matricula->primaryKey => $id));
			$this->request->data = $this->Matricula->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Matricula->id = $id;
		if (!$this->Matricula->exists()) {
			throw new NotFoundException(__('Invalid matricula'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Matricula->delete()) {
			$this->Session->setFlash(__('The matricula has been deleted.'));
		} else {
			$this->Session->setFlash(__('The matricula could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
