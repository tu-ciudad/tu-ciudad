<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UbicacionesNegocios Controller
 *
 * @property \App\Model\Table\UbicacionesNegociosTable $UbicacionesNegocios
 */
class UbicacionesNegociosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Negocios']
        ];
        $ubicacionesNegocios = $this->paginate($this->UbicacionesNegocios);

        $this->set(compact('ubicacionesNegocios'));
        $this->set('_serialize', ['ubicacionesNegocios']);
    }

    /**
     * View method
     *
     * @param string|null $id Ubicaciones Negocio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ubicacionesNegocio = $this->UbicacionesNegocios->get($id, [
            'contain' => ['Negocios']
        ]);

        $this->set('ubicacionesNegocio', $ubicacionesNegocio);
        $this->set('_serialize', ['ubicacionesNegocio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ubicacionesNegocio = $this->UbicacionesNegocios->newEntity();
        if ($this->request->is('post')) {
            $ubicacionesNegocio = $this->UbicacionesNegocios->patchEntity($ubicacionesNegocio, $this->request->getData());
            if ($this->UbicacionesNegocios->save($ubicacionesNegocio)) {
                $this->Flash->success(__('The ubicaciones negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ubicaciones negocio could not be saved. Please, try again.'));
        }
        $negocios = $this->UbicacionesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('ubicacionesNegocio', 'negocios'));
        $this->set('_serialize', ['ubicacionesNegocio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ubicaciones Negocio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ubicacionesNegocio = $this->UbicacionesNegocios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ubicacionesNegocio = $this->UbicacionesNegocios->patchEntity($ubicacionesNegocio, $this->request->getData());
            if ($this->UbicacionesNegocios->save($ubicacionesNegocio)) {
                $this->Flash->success(__('The ubicaciones negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ubicaciones negocio could not be saved. Please, try again.'));
        }
        $negocios = $this->UbicacionesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('ubicacionesNegocio', 'negocios'));
        $this->set('_serialize', ['ubicacionesNegocio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ubicaciones Negocio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ubicacionesNegocio = $this->UbicacionesNegocios->get($id);
        if ($this->UbicacionesNegocios->delete($ubicacionesNegocio)) {
            $this->Flash->success(__('The ubicaciones negocio has been deleted.'));
        } else {
            $this->Flash->error(__('The ubicaciones negocio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
