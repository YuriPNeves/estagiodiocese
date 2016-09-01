<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Movimentos Controller
 *
 * @property \App\Model\Table\MovimentosTable $Movimentos
 */
class MovimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $movimentos = $this->paginate($this->Movimentos);

        $this->set(compact('movimentos'));
        $this->set('_serialize', ['movimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Movimento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movimento = $this->Movimentos->get($id, [
            'contain' => []
        ]);

        $this->set('movimento', $movimento);
        $this->set('_serialize', ['movimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movimento = $this->Movimentos->newEntity();
        if ($this->request->is('post')) {
            $movimento = $this->Movimentos->patchEntity($movimento, $this->request->data);
            if ($this->Movimentos->save($movimento)) {
                $this->Flash->success(__('The movimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The movimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('movimento'));
        $this->set('_serialize', ['movimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movimento = $this->Movimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movimento = $this->Movimentos->patchEntity($movimento, $this->request->data);
            if ($this->Movimentos->save($movimento)) {
                $this->Flash->success(__('The movimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The movimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('movimento'));
        $this->set('_serialize', ['movimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movimento = $this->Movimentos->get($id);
        if ($this->Movimentos->delete($movimento)) {
            $this->Flash->success(__('The movimento has been deleted.'));
        } else {
            $this->Flash->error(__('The movimento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
