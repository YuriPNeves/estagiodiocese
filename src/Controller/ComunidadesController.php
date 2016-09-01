<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comunidades Controller
 *
 * @property \App\Model\Table\ComunidadesTable $Comunidades
 */
class ComunidadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $comunidades = $this->paginate($this->Comunidades);

        $this->set(compact('comunidades'));
        $this->set('_serialize', ['comunidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Comunidade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comunidade = $this->Comunidades->get($id, [
            'contain' => []
        ]);

        $this->set('comunidade', $comunidade);
        $this->set('_serialize', ['comunidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comunidade = $this->Comunidades->newEntity();
        if ($this->request->is('post')) {
            $comunidade = $this->Comunidades->patchEntity($comunidade, $this->request->data);
            if ($this->Comunidades->save($comunidade)) {
                $this->Flash->success(__('The comunidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comunidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('comunidade'));
        $this->set('_serialize', ['comunidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comunidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comunidade = $this->Comunidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comunidade = $this->Comunidades->patchEntity($comunidade, $this->request->data);
            if ($this->Comunidades->save($comunidade)) {
                $this->Flash->success(__('The comunidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comunidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('comunidade'));
        $this->set('_serialize', ['comunidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comunidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comunidade = $this->Comunidades->get($id);
        if ($this->Comunidades->delete($comunidade)) {
            $this->Flash->success(__('The comunidade has been deleted.'));
        } else {
            $this->Flash->error(__('The comunidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
