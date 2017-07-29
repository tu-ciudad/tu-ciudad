<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Filesystem\File;

/**
 * ImagenesNegocios Controller
 *
 * @property \App\Model\Table\ImagenesNegociosTable $ImagenesNegocios
 */
class ImagenesNegociosController extends AppController
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
        $imagenesNegocios = $this->paginate($this->ImagenesNegocios);

        $this->set(compact('imagenesNegocios'));
        $this->set('_serialize', ['imagenesNegocios']);
    }
   
    /**
     * View method
     *
     * @param string|null $id Imagenes Negocio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagenesNegocio = $this->ImagenesNegocios->get($id, [
            'contain' => ['Negocios']
        ]);

        $this->set('imagenesNegocio', $imagenesNegocio);
        $this->set('_serialize', ['imagenesNegocio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagenesNegocio = $this->ImagenesNegocios->newEntity();
        if ($this->request->is(['post','delete'])) {
            //borro una imagen si ya existe
          $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
         // $query = $this->ImagenesNegocios->query();
         // $query->delete()->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])->execute();
          $imagen = $this->request->data['foto'];
          //$imagenesNegocio->set('foto', $nombredelaimagen );
          //$this->ImagenesNegocios->save($imagenesNegocio);

          if ($this->Auth->user['rol'] === 'admin'){
                return $this->redirect(['controller' => 'negocios','action' => 'edit','id' => $id]);
            } else {
                return $this->redirect(['controller' => 'negocios','action' => 'editar']);
            }
        }
        $negocios = $this->ImagenesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('imagenesNegocio', 'negocios'));
        $this->set('_serialize', ['imagenesNegocio']);
     /*
        $imagenesNegocio = $this->ImagenesNegocios->newEntity();
        if ($this->request->is(['post','delete'])) {
            $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
            //borro una imagen si ya existe
            $query = $this->ImagenesNegocios->query();
            $ruta = $this->ImagenesNegocios->find()->select(['foto'])->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
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
    ->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
    ->execute();
            unlink( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $ruta);
        }
            //.................................
            if ($this->ImagenesNegocios->save($imagenesNegocio)) {
            $conexion = ConnectionManager::get('default');
            $res = $conexion->execute('Call renombrarfoto(?)',[$imagenesNegocio->foto])->fetchAll('assoc');
            $mensaje = $res[0]['@mensaje'];
           rename( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto, ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $mensaje);


$ruta =  '..' . '/' . 'files' . '/' . 'ImagenesNegocios' . '/' . 'foto' . '/' . $mensaje;
$ruta1 = '/files/ImagenesNegocios/foto/' . $mensaje;
                $this->Flash->success(__('The imagenes negocio has been saved.'));
                return $this->setAction('redimension',$ruta,$ruta1);
               // return $this->redirect(['action' => 'redimension',$ruta]);
            }
            $this->Flash->error(__('The imagenes negocio could not be saved. Please, try again.'));
        }
        $negocios = $this->ImagenesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('imagenesNegocio', 'negocios'));
        $this->set('_serialize', ['imagenesNegocio']);
    */}





public function add1()
    {
        $imagenesNegocio = $this->ImagenesNegocios->newEntity();
        if ($this->request->is(['post','delete'])) {
            $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
            //borro una imagen si ya existe
            $query = $this->ImagenesNegocios->query();
            $ruta = $this->ImagenesNegocios->find()->select(['foto'])->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
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
    ->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
    ->execute();
            unlink( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $ruta);
        }
        //.................................
            if ($this->ImagenesNegocios->save($imagenesNegocio)) {
            $conexion = ConnectionManager::get('default');
            $res = $conexion->execute('Call renombrarfoto(?)',[$imagenesNegocio->foto])->fetchAll('assoc');
            $mensaje = $res[0]['@mensaje'];
           rename( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto, ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $mensaje);

                $this->Flash->success(__('The imagenes negocio has been saved.'));
                return $this->redirect(['action' => 'index']);;
            }
            $this->Flash->error(__('The imagenes negocio could not be saved. Please, try again.'));
        }
        $negocios = $this->ImagenesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('imagenesNegocio', 'negocios'));
        $this->set('_serialize', ['imagenesNegocio']);
    }







    /**
     * Edit method
     *
     * @param string|null $id Imagenes Negocio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagenesNegocio = $this->ImagenesNegocios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
            if ($this->ImagenesNegocios->save($imagenesNegocio)) {
                $this->Flash->success(__('The imagenes negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagenes negocio could not be saved. Please, try again.'));
        }
        $negocios = $this->ImagenesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('imagenesNegocio', 'negocios'));
        $this->set('_serialize', ['imagenesNegocio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagenes Negocio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagenesNegocio = $this->ImagenesNegocios->get($id);
        if ($this->ImagenesNegocios->delete($imagenesNegocio)) {
            $this->Flash->success(__('The imagenes negocio has been deleted.'));
        } else {
            $this->Flash->error(__('The imagenes negocio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function redimension($ruta,$ruta1)
    {
         if ($this->request->is('post')) {
        }
        $this->set(compact(['ruta','ruta1']));
        $this->set('_serialize', ['ruta','ruta1']);
    }
}
