<?php
App::uses('AppController', 'Controller');
/**
 * PeriodoAcademicos Controller
 *
 * @property PeriodoAcademico $PeriodoAcademico
 * @property PaginatorComponent $Paginator
 */
class PeriodoAcademicosController extends AppController {

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
		$this->PeriodoAcademico->recursive = 0;
                
                $periodoAcademicos = $this->PeriodoAcademico->find('all');
                
		$this->set('periodoAcademicos', $periodoAcademicos);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeriodoAcademico->exists($id)) {
			throw new NotFoundException(__('Invalid periodo academico'));
		}
		$options = array('conditions' => array('PeriodoAcademico.' . $this->PeriodoAcademico->primaryKey => $id));
		$this->set('periodoAcademico', $this->PeriodoAcademico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeriodoAcademico->create();
			if ($this->PeriodoAcademico->save($this->request->data)) {
				$this->Session->setFlash(__('Período Académico Registrado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Período Académico no Registrado.'));
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
		if (!$this->PeriodoAcademico->exists($id)) {
			throw new NotFoundException(__('Invalid periodo academico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeriodoAcademico->save($this->request->data)) {
				$this->Session->setFlash(__('The periodo academico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The periodo academico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeriodoAcademico.' . $this->PeriodoAcademico->primaryKey => $id));
			$this->request->data = $this->PeriodoAcademico->find('first', $options);
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
		$this->PeriodoAcademico->id = $id;
		if (!$this->PeriodoAcademico->exists()) {
			throw new NotFoundException(__('Invalid periodo academico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeriodoAcademico->delete()) {
			$this->Session->setFlash(__('The periodo academico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The periodo academico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
