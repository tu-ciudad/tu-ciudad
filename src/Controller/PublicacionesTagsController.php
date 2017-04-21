<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PublicacionesTags Controller
 *
 * @property \App\Model\Table\PublicacionesTagsTable $PublicacionesTags
 */
class PublicacionesTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Publicaciones', 'Tags']
        ];
        $publicacionesTags = $this->paginate($this->PublicacionesTags);

        $this->set(compact('publicacionesTags'));
        $this->set('_serialize', ['publicacionesTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Publicaciones Tag id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publicacionesTag = $this->PublicacionesTags->get($id, [
            'contain' => ['Publicaciones', 'Tags']
        ]);

        $this->set('publicacionesTag', $publicacionesTag);
        $this->set('_serialize', ['publicacionesTag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publicacionesTag = $this->PublicacionesTags->newEntity();
        if ($this->request->is('post')) {
            $publicacionesTag = $this->PublicacionesTags->patchEntity($publicacionesTag, $this->request->getData());
            if ($this->PublicacionesTags->save($publicacionesTag)) {
                $this->Flash->success(__('The publicaciones tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicaciones tag could not be saved. Please, try again.'));
        }
        $publicaciones = $this->PublicacionesTags->Publicaciones->find('list', ['limit' => 200]);
        $tags = $this->PublicacionesTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('publicacionesTag', 'publicaciones', 'tags'));
        $this->set('_serialize', ['publicacionesTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Publicaciones Tag id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publicacionesTag = $this->PublicacionesTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publicacionesTag = $this->PublicacionesTags->patchEntity($publicacionesTag, $this->request->getData());
            if ($this->PublicacionesTags->save($publicacionesTag)) {
                $this->Flash->success(__('The publicaciones tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicaciones tag could not be saved. Please, try again.'));
        }
        $publicaciones = $this->PublicacionesTags->Publicaciones->find('list', ['limit' => 200]);
        $tags = $this->PublicacionesTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('publicacionesTag', 'publicaciones', 'tags'));
        $this->set('_serialize', ['publicacionesTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Publicaciones Tag id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publicacionesTag = $this->PublicacionesTags->get($id);
        if ($this->PublicacionesTags->delete($publicacionesTag)) {
            $this->Flash->success(__('The publicaciones tag has been deleted.'));
        } else {
            $this->Flash->error(__('The publicaciones tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
