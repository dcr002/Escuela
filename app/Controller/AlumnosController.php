<?php
App::uses('AppController', 'Controller');
/**
 * Alumnos Controller
 *
 * @property Alumno $Alumno
 * @property PaginatorComponent $Paginator
 * @property Estado $Estado
 */
class AlumnosController extends AppController {

    public $uses = array('Alumno', 'DatoPadre', 'DatoRepresentante', 'DatoRepresentado', 'Estado');


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
                
                $options['conditions'] = array('Alumno.isDelete'=>0);
                $options['fields'] = array('id', 'nombres', 'apellidos', 'cedula', 'sexo', 'created');
                
                $alumnos = $this->Alumno->find('all',$options);
		$this->set('alumnos', $alumnos);
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
                
                $this->Alumno->create();
                
                if($this->Alumno->saveAssociated($this->request->data, array('deep'=>true))){
                    $this->Session->setFlash(__('Registro Finalizado Exitosamente.'));
                    return $this->redirect(array('action'=>'add'));
                }
                
                //debug($data);
            }
                $estados = $this->Estado->find('list', array('fields'=>array('id', 'estado')));
                $this->set('estados', $estados);
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
                         $estados = $this->Estado->find('list', array('fields'=>array('id', 'estado')));
                         $this->set('estados', $estados);
                
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
			throw new NotFoundException(__('Alumno Inválido.'));
		}
		$this->request->allowMethod('post', 'delete');
                $this->Alumno->set(array('isDelete'=>1));
		if ($this->Alumno->save()) {
			$this->Session->setFlash(__('Registros del Alumno Eliminados.'));
		} else {
			$this->Session->setFlash(__('Registros no Eliminados.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
