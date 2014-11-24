<?php
App::uses('AppController', 'Controller');
/**
 * Alumnos Controller
 *
 * @property Alumno $Alumno
 * @property PaginatorComponent $Paginator
 */
class AlumnosController extends AppController {

    public $uses = array('Alumno', 'DatoPadre', 'DatoRepresentante', 'DatoRepresentado');


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
		$this->Alumno->recursive = 0;
		$this->set('alumnos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Alumno->exists($id)) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
		$this->set('alumno', $this->Alumno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            if ($this->request->is('post')) {
                
                //debug($this->request->data);
                
                $data = array(
                    'Alumno' => $this->request->data['Alumno'],
                    'DatoPadre' => $this->request->data['DatoPadre'],
                );
                
                $data['DatoRepresentante'][0]['DatoRepresentado'] = $this->request->data['DatoRepresentado'];
                
                $this->Alumno->create();
                
                if($this->Alumno->saveAssociated($data, array('deep'=>true))){
                    $this->Session->setFlash(__('Registro Finalizado Exitosamente.'));
                    //return $this->redirect(array('action'=>'add'));
                }
                
                debug($data);
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
		if (!$this->Alumno->exists($id)) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash(__('The alumno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alumno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
			$this->request->data = $this->Alumno->find('first', $options);
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
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Alumno->delete()) {
			$this->Session->setFlash(__('The alumno has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alumno could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
