<?php
App::uses('AppController', 'Controller');
/**
 * DatoAlumnos Controller
 *
 * @property DatoAlumno $DatoAlumno
 * @property PaginatorComponent $Paginator
 */
class DatoAlumnosController extends AppController {

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
		$this->DatoAlumno->recursive = 0;
		$this->set('datoAlumnos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatoAlumno->exists($id)) {
			throw new NotFoundException(__('Invalid dato alumno'));
		}
		$options = array('conditions' => array('DatoAlumno.' . $this->DatoAlumno->primaryKey => $id));
		$this->set('datoAlumno', $this->DatoAlumno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatoAlumno->create();
			if ($this->DatoAlumno->save($this->request->data)) {
				$this->Session->setFlash(__('The dato alumno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato alumno could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->DatoAlumno->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DatoAlumno->exists($id)) {
			throw new NotFoundException(__('Invalid dato alumno'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DatoAlumno->save($this->request->data)) {
				$this->Session->setFlash(__('The dato alumno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato alumno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatoAlumno.' . $this->DatoAlumno->primaryKey => $id));
			$this->request->data = $this->DatoAlumno->find('first', $options);
		}
		$alumnos = $this->DatoAlumno->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DatoAlumno->id = $id;
		if (!$this->DatoAlumno->exists()) {
			throw new NotFoundException(__('Invalid dato alumno'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DatoAlumno->delete()) {
			$this->Session->setFlash(__('The dato alumno has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dato alumno could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
