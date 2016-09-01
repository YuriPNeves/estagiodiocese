<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cleros Controller
 *
 * @property \App\Model\Table\ClerosTable $Cleros
 */
class ClerosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cleros = $this->paginate($this->Cleros);

        $this->set(compact('cleros'));
        $this->set('_serialize', ['cleros']);
    }

    /**
     * View method
     *
     * @param string|null $id Clero id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clero = $this->Cleros->get($id, [
            'contain' => []
        ]);

        $this->set('clero', $clero);
        $this->set('_serialize', ['clero']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clero = $this->Cleros->newEntity();
        if ($this->request->is('post')) {
            $clero = $this->Cleros->patchEntity($clero, $this->request->data);
            if ($this->Cleros->save($clero)) {
                $this->Flash->success(__('The clero has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clero could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clero'));
        $this->set('_serialize', ['clero']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clero id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clero = $this->Cleros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clero = $this->Cleros->patchEntity($clero, $this->request->data);
            if ($this->Cleros->save($clero)) {
                $this->Flash->success(__('The clero has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clero could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clero'));
        $this->set('_serialize', ['clero']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clero id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clero = $this->Cleros->get($id);
        if ($this->Cleros->delete($clero)) {
            $this->Flash->success(__('The clero has been deleted.'));
        } else {
            $this->Flash->error(__('The clero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
