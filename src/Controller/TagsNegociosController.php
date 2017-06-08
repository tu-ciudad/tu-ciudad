<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TagsNegocios Controller
 *
 * @property \App\Model\Table\TagsNegociosTable $TagsNegocios
 */
class TagsNegociosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tagsNegocios = $this->paginate($this->TagsNegocios);

        $this->set(compact('tagsNegocios'));
        $this->set('_serialize', ['tagsNegocios']);
    }

    /**
     * View method
     *
     * @param string|null $id Tags Negocio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tagsNegocio = $this->TagsNegocios->get($id, [
            'contain' => []
        ]);

        $this->set('tagsNegocio', $tagsNegocio);
        $this->set('_serialize', ['tagsNegocio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tagsNegocio = $this->TagsNegocios->newEntity();
        if ($this->request->is('post')) {
            $tagsNegocio = $this->TagsNegocios->patchEntity($tagsNegocio, $this->request->getData());
            if ($this->TagsNegocios->save($tagsNegocio)) {
                $this->Flash->success(__('The tags negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tags negocio could not be saved. Please, try again.'));
        }
        $this->set(compact('tagsNegocio'));
        $this->set('_serialize', ['tagsNegocio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tags Negocio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tagsNegocio = $this->TagsNegocios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tagsNegocio = $this->TagsNegocios->patchEntity($tagsNegocio, $this->request->getData());
            if ($this->TagsNegocios->save($tagsNegocio)) {
                $this->Flash->success(__('The tags negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tags negocio could not be saved. Please, try again.'));
        }
        $this->set(compact('tagsNegocio'));
        $this->set('_serialize', ['tagsNegocio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tags Negocio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tagsNegocio = $this->TagsNegocios->get($id);
        if ($this->TagsNegocios->delete($tagsNegocio)) {
            $this->Flash->success(__('The tags negocio has been deleted.'));
        } else {
            $this->Flash->error(__('The tags negocio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
