<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ImagenesPublicaciones Controller
 *
 * @property \App\Model\Table\ImagenesPublicacionesTable $ImagenesPublicaciones
 */
class ImagenesPublicacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Publicaciones']
        ];
        $imagenesPublicaciones = $this->paginate($this->ImagenesPublicaciones);

        $this->set(compact('imagenesPublicaciones'));
        $this->set('_serialize', ['imagenesPublicaciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagenes Publicacione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagenesPublicacione = $this->ImagenesPublicaciones->get($id, [
            'contain' => ['Publicaciones']
        ]);

        $this->set('imagenesPublicacione', $imagenesPublicacione);
        $this->set('_serialize', ['imagenesPublicacione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagenesPublicacione = $this->ImagenesPublicaciones->newEntity();
        if ($this->request->is('post')) {
            $imagenesPublicacione = $this->ImagenesPublicaciones->patchEntity($imagenesPublicacione, $this->request->getData());
            if ($this->ImagenesPublicaciones->save($imagenesPublicacione)) {
                $this->Flash->success(__('The imagenes publicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagenes publicacione could not be saved. Please, try again.'));
        }
        $publicaciones = $this->ImagenesPublicaciones->Publicaciones->find('list', ['limit' => 200]);
        $this->set(compact('imagenesPublicacione', 'publicaciones'));
        $this->set('_serialize', ['imagenesPublicacione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagenes Publicacione id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagenesPublicacione = $this->ImagenesPublicaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagenesPublicacione = $this->ImagenesPublicaciones->patchEntity($imagenesPublicacione, $this->request->getData());
            
            if ($this->ImagenesPublicaciones->save($imagenesPublicacione)) {
                $this->Flash->success(__('The imagenes publicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagenes publicacione could not be saved. Please, try again.'));
        }
        $publicaciones = $this->ImagenesPublicaciones->Publicaciones->find('list', ['limit' => 200]);
        $this->set(compact('imagenesPublicacione', 'publicaciones'));
        $this->set('_serialize', ['imagenesPublicacione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagenes Publicacione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagenesPublicacione = $this->ImagenesPublicaciones->get($id);
        if ($this->ImagenesPublicaciones->delete($imagenesPublicacione)) {
            $this->Flash->success(__('The imagenes publicacione has been deleted.'));
        } else {
            $this->Flash->error(__('The imagenes publicacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
