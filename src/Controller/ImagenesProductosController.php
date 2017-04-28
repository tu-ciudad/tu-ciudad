<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Filesystem\File;

/**
 * ImagenesProductos Controller
 *
 * @property \App\Model\Table\ImagenesProductosTable $ImagenesProductos
 */
class ImagenesProductosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Productos']
        ];
        $imagenesProductos = $this->paginate($this->ImagenesProductos);

        $this->set(compact('imagenesProductos'));
        $this->set('_serialize', ['imagenesProductos']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagenes Producto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagenesProducto = $this->ImagenesProductos->get($id, [
            'contain' => ['Productos']
        ]);

        $this->set('imagenesProducto', $imagenesProducto);
        $this->set('_serialize', ['imagenesProducto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagenesProducto = $this->ImagenesProductos->newEntity();
        if ($this->request->is('post')) {
            $imagenesProducto = $this->ImagenesProductos->patchEntity($imagenesProducto, $this->request->getData());
             //borro una imagen si ya existe
            $query = $this->ImagenesProductos->query();
            $ruta = $this->ImagenesProductos->find()->select(['foto'])->where(['productos_id' => $imagenesProducto->productos_id, 'numero' => $imagenesProducto->numero])
    ->toArray();
    if ($ruta != null){
      if(is_array($ruta)){
          $ruta = $ruta[0]->foto;
          }
      else 
      {
        $ruta = $ruta->foto;
        }
            $query->delete()
    ->where(['productos_id' => $imagenesProducto->productos_id, 'numero' => $imagenesProducto->numero])
    ->execute();
            unlink( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesProductos' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $ruta);
        }
        //.................................



if ($this->ImagenesProductos->save($imagenesProducto)) {
            $conexion = ConnectionManager::get('default');
            $res = $conexion->execute('Call renombrarfotoprod(?)',[$imagenesProducto->foto])->fetchAll('assoc');
            $mensaje = $res[0]['@mensaje'];
           rename( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesProductos' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesProducto->foto, ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesProductos' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $mensaje);

                $this->Flash->success(__('The imagenes negocio has been saved.'));
                return $this->redirect(['action' => 'index']);;
            }
            $this->Flash->error(__('The imagenes negocio could not be saved. Please, try again.'));
        }
        $productos = $this->ImagenesProductos->Productos->find('list', ['limit' => 200]);
        $this->set(compact('imagenesProducto', 'productos'));
        $this->set('_serialize', ['imagenesProducto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagenes Producto id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagenesProducto = $this->ImagenesProductos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagenesProducto = $this->ImagenesProductos->patchEntity($imagenesProducto, $this->request->getData());
            if ($this->ImagenesProductos->save($imagenesProducto)) {
                $this->Flash->success(__('The imagenes producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagenes producto could not be saved. Please, try again.'));
        }
        $productos = $this->ImagenesProductos->Productos->find('list', ['limit' => 200]);
        $this->set(compact('imagenesProducto', 'productos'));
        $this->set('_serialize', ['imagenesProducto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagenes Producto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagenesProducto = $this->ImagenesProductos->get($id);
        if ($this->ImagenesProductos->delete($imagenesProducto)) {
            $this->Flash->success(__('The imagenes producto has been deleted.'));
        } else {
            $this->Flash->error(__('The imagenes producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
