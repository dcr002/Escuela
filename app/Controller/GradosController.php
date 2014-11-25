<?php
App::uses('AppController', 'Controller');
/**
 * Grados Controller
 *
 * @property Grado $Grado
 * @property PeriodoAcademico $PeriodoAcademico
 * @property PaginatorComponent $Paginator
 */
class GradosController extends AppController {

    /**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public $uses = array('Grado', 'PeriodoAcademico');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Grado->recursive = 0;
                
                $grados = $this->Grado->find('all');
                $periodos = $this->PeriodoAcademico->find('list', array('fields'=>array('id', 'periodo')));
                
		$this->set('grados', $grados);
                $this->set('periodos', $periodos);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grado->exists($id)) {
			throw new NotFoundException(__('Invalid grado'));
		}
		$options = array('conditions' => array('Grado.' . $this->Grado->primaryKey => $id));
		$this->set('grado', $this->Grado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grado->create();
			if ($this->Grado->save($this->request->data)) {
				$this->Session->setFlash(__('Grado Asociado al Período Actual.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Grado no Registrado.'));
			}
		}
		$periodoAcademicos = $this->Grado->PeriodoAcademico->find('list', array('fields'=>array('id', 'periodo')));
		$this->set(compact('periodoAcademicos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Grado->exists($id)) {
			throw new NotFoundException(__('Invalid grado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grado->save($this->request->data)) {
				$this->Session->setFlash(__('Grado Editado y Asociado al Período Actual.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Grado no Editado.'));
			}
		} else {
			$options = array('conditions' => array('Grado.' . $this->Grado->primaryKey => $id));
			$this->request->data = $this->Grado->find('first', $options);
		}
		$periodoAcademicos = $this->Grado->PeriodoAcademico->find('list', array('fields'=>array('id', 'periodo')));
		$this->set(compact('periodoAcademicos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Grado->id = $id;
		if (!$this->Grado->exists()) {
			throw new NotFoundException(__('Invalid grado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Grado->delete()) {
			$this->Session->setFlash(__('The grado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
