<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NegociosTags Controller
 *
 * @property \App\Model\Table\NegociosTagsTable $NegociosTags
 */
class NegociosTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Negocios', 'Tags']
        ];
        $negociosTags = $this->paginate($this->NegociosTags);

        $this->set(compact('negociosTags'));
        $this->set('_serialize', ['negociosTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Negocios Tag id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $negociosTag = $this->NegociosTags->get($id, [
            'contain' => ['Negocios', 'Tags']
        ]);

        $this->set('negociosTag', $negociosTag);
        $this->set('_serialize', ['negociosTag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $negociosTag = $this->NegociosTags->newEntity();
        if ($this->request->is('post')) {
            $negociosTag = $this->NegociosTags->patchEntity($negociosTag, $this->request->getData());
            if ($this->NegociosTags->save($negociosTag)) {
                $this->Flash->success(__('The negocios tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The negocios tag could not be saved. Please, try again.'));
        }
        $negocios = $this->NegociosTags->Negocios->find('list', ['limit' => 200]);
        $tags = $this->NegociosTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('negociosTag', 'negocios', 'tags'));
        $this->set('_serialize', ['negociosTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Negocios Tag id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $negociosTag = $this->NegociosTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $negociosTag = $this->NegociosTags->patchEntity($negociosTag, $this->request->getData());
            if ($this->NegociosTags->save($negociosTag)) {
                $this->Flash->success(__('The negocios tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The negocios tag could not be saved. Please, try again.'));
        }
        $negocios = $this->NegociosTags->Negocios->find('list', ['limit' => 200]);
        $tags = $this->NegociosTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('negociosTag', 'negocios', 'tags'));
        $this->set('_serialize', ['negociosTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Negocios Tag id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $negociosTag = $this->NegociosTags->get($id);
        if ($this->NegociosTags->delete($negociosTag)) {
            $this->Flash->success(__('The negocios tag has been deleted.'));
        } else {
            $this->Flash->error(__('The negocios tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
