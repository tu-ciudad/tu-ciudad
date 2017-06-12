<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tagsnegocios Controller
 *
 * @property \App\Model\Table\TagsnegociosTable $Tagsnegocios
 */
class TagsnegociosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tagsnegocios = $this->paginate($this->Tagsnegocios);

        $this->set(compact('tagsnegocios'));
        $this->set('_serialize', ['tagsnegocios']);
    }

    /**
     * View method
     *
     * @param string|null $id Tagsnegocio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tagsnegocio = $this->Tagsnegocios->get($id, [
            'contain' => []
        ]);

        $this->set('tagsnegocio', $tagsnegocio);
        $this->set('_serialize', ['tagsnegocio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tagsnegocio = $this->Tagsnegocios->newEntity();
        if ($this->request->is('post')) {
            $tagsnegocio = $this->Tagsnegocios->patchEntity($tagsnegocio, $this->request->getData());
            if ($this->Tagsnegocios->save($tagsnegocio)) {
                $this->Flash->success(__('The tagsnegocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tagsnegocio could not be saved. Please, try again.'));
        }
        $this->set(compact('tagsnegocio'));
        $this->set('_serialize', ['tagsnegocio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tagsnegocio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tagsnegocio = $this->Tagsnegocios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tagsnegocio = $this->Tagsnegocios->patchEntity($tagsnegocio, $this->request->getData());
            if ($this->Tagsnegocios->save($tagsnegocio)) {
                $this->Flash->success(__('The tagsnegocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tagsnegocio could not be saved. Please, try again.'));
        }
        $this->set(compact('tagsnegocio'));
        $this->set('_serialize', ['tagsnegocio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tagsnegocio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tagsnegocio = $this->Tagsnegocios->get($id);
        if ($this->Tagsnegocios->delete($tagsnegocio)) {
            $this->Flash->success(__('The tagsnegocio has been deleted.'));
        } else {
            $this->Flash->error(__('The tagsnegocio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
