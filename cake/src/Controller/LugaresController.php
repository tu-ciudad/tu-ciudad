<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lugares Controller
 *
 * @property \App\Model\Table\LugaresTable $Lugares
 */
class LugaresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $lugares = $this->paginate($this->Lugares);

        $this->set(compact('lugares'));
        $this->set('_serialize', ['lugares']);
    }

    /**
     * View method
     *
     * @param string|null $id Lugare id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lugare = $this->Lugares->get($id, [
            'contain' => []
        ]);

        $this->set('lugare', $lugare);
        $this->set('_serialize', ['lugare']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lugare = $this->Lugares->newEntity();
        if ($this->request->is('post')) {
            $lugare = $this->Lugares->patchEntity($lugare, $this->request->getData());
            if ($this->Lugares->save($lugare)) {
                $this->Flash->success(__('The lugare has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lugare could not be saved. Please, try again.'));
        }
        $this->set(compact('lugare'));
        $this->set('_serialize', ['lugare']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lugare id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lugare = $this->Lugares->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lugare = $this->Lugares->patchEntity($lugare, $this->request->getData());
            if ($this->Lugares->save($lugare)) {
                $this->Flash->success(__('The lugare has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lugare could not be saved. Please, try again.'));
        }
        $this->set(compact('lugare'));
        $this->set('_serialize', ['lugare']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lugare id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lugare = $this->Lugares->get($id);
        if ($this->Lugares->delete($lugare)) {
            $this->Flash->success(__('The lugare has been deleted.'));
        } else {
            $this->Flash->error(__('The lugare could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
