<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Negocios Controller
 *
 * @property \App\Model\Table\NegociosTable $Negocios
 */
class NegociosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lugares']
        ];
        $negocios = $this->paginate($this->Negocios);

        $this->set(compact('negocios'));
        $this->set('_serialize', ['negocios']);
    }

    /**
     * View method
     *
     * @param string|null $id Negocio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $negocio = $this->Negocios->get($id, [
            'contain' => ['Lugares']
        ]);

        $this->set('negocio', $negocio);
        $this->set('_serialize', ['negocio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $negocio = $this->Negocios->newEntity();
        if ($this->request->is('post')) {
            $negocio = $this->Negocios->patchEntity($negocio, $this->request->getData());
            if ($this->Negocios->save($negocio)) {
                $this->Flash->success(__('The negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The negocio could not be saved. Please, try again.'));
        }
        $lugares = $this->Negocios->Lugares->find('list', ['limit' => 200]);
        $this->set(compact('negocio', 'lugares'));
        $this->set('_serialize', ['negocio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Negocio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $negocio = $this->Negocios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $negocio = $this->Negocios->patchEntity($negocio, $this->request->getData());
            if ($this->Negocios->save($negocio)) {
                $this->Flash->success(__('The negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The negocio could not be saved. Please, try again.'));
        }
        $lugares = $this->Negocios->Lugares->find('list', ['limit' => 200]);
        $this->set(compact('negocio', 'lugares'));
        $this->set('_serialize', ['negocio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Negocio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $negocio = $this->Negocios->get($id);
        if ($this->Negocios->delete($negocio)) {
            $this->Flash->success(__('The negocio has been deleted.'));
        } else {
            $this->Flash->error(__('The negocio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
