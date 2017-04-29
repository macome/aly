<?php
App::uses('AppController', 'Controller');
/**
 * Carros Controller
 *
 * @property Carro $Carro
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CarrosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Carro->recursive = 0;
		$this->set('carros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carro->exists($id)) {
			throw new NotFoundException(__('Invalid carro'));
		}
		$options = array('conditions' => array('Carro.' . $this->Carro->primaryKey => $id));
		$this->set('carro', $this->Carro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carro->create();
			if ($this->Carro->save($this->request->data)) {
				$this->Session->setFlash(__('The carro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carro could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Carro->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Carro->exists($id)) {
			throw new NotFoundException(__('Invalid carro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carro->save($this->request->data)) {
				$this->Session->setFlash(__('The carro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Carro.' . $this->Carro->primaryKey => $id));
			$this->request->data = $this->Carro->find('first', $options);
		}
		$clientes = $this->Carro->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Carro->id = $id;
		if (!$this->Carro->exists()) {
			throw new NotFoundException(__('Invalid carro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carro->delete()) {
			$this->Session->setFlash(__('The carro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The carro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
