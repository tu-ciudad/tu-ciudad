<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductosTags Controller
 *
 * @property \App\Model\Table\ProductosTagsTable $ProductosTags
 */
class ProductosTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Productos', 'Tags']
        ];
        $productosTags = $this->paginate($this->ProductosTags);

        $this->set(compact('productosTags'));
        $this->set('_serialize', ['productosTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Productos Tag id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productosTag = $this->ProductosTags->get($id, [
            'contain' => ['Productos', 'Tags']
        ]);

        $this->set('productosTag', $productosTag);
        $this->set('_serialize', ['productosTag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productosTag = $this->ProductosTags->newEntity();
        if ($this->request->is('post')) {
            $productosTag = $this->ProductosTags->patchEntity($productosTag, $this->request->getData());
            if ($this->ProductosTags->save($productosTag)) {
                $this->Flash->success(__('The productos tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productos tag could not be saved. Please, try again.'));
        }
        $productos = $this->ProductosTags->Productos->find('list', ['limit' => 200]);
        $tags = $this->ProductosTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('productosTag', 'productos', 'tags'));
        $this->set('_serialize', ['productosTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Productos Tag id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productosTag = $this->ProductosTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productosTag = $this->ProductosTags->patchEntity($productosTag, $this->request->getData());
            if ($this->ProductosTags->save($productosTag)) {
                $this->Flash->success(__('The productos tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productos tag could not be saved. Please, try again.'));
        }
        $productos = $this->ProductosTags->Productos->find('list', ['limit' => 200]);
        $tags = $this->ProductosTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('productosTag', 'productos', 'tags'));
        $this->set('_serialize', ['productosTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Productos Tag id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productosTag = $this->ProductosTags->get($id);
        if ($this->ProductosTags->delete($productosTag)) {
            $this->Flash->success(__('The productos tag has been deleted.'));
        } else {
            $this->Flash->error(__('The productos tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
