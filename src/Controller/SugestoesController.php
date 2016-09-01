<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sugestoes Controller
 *
 * @property \App\Model\Table\SugestoesTable $Sugestoes
 */
class SugestoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sugestoes = $this->paginate($this->Sugestoes);

        $this->set(compact('sugestoes'));
        $this->set('_serialize', ['sugestoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Sugesto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sugesto = $this->Sugestoes->get($id, [
            'contain' => []
        ]);

        $this->set('sugesto', $sugesto);
        $this->set('_serialize', ['sugesto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sugesto = $this->Sugestoes->newEntity();
        if ($this->request->is('post')) {
            $sugesto = $this->Sugestoes->patchEntity($sugesto, $this->request->data);
            if ($this->Sugestoes->save($sugesto)) {
                $this->Flash->success(__('The sugesto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sugesto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sugesto'));
        $this->set('_serialize', ['sugesto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sugesto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sugesto = $this->Sugestoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sugesto = $this->Sugestoes->patchEntity($sugesto, $this->request->data);
            if ($this->Sugestoes->save($sugesto)) {
                $this->Flash->success(__('The sugesto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sugesto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sugesto'));
        $this->set('_serialize', ['sugesto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sugesto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sugesto = $this->Sugestoes->get($id);
        if ($this->Sugestoes->delete($sugesto)) {
            $this->Flash->success(__('The sugesto has been deleted.'));
        } else {
            $this->Flash->error(__('The sugesto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
