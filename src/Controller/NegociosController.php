<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Datasource\EntityInterface;
use Cake\ORM\Query;

/**
 * Negocios Controller
 *
 * @property \App\Model\Table\NegociosTable $Negocios
 */
class NegociosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function isAuthorized($user)
{
    // The owner of an article can edit and delete it
    if (in_array($this->request->getParam('action'), ['edit'])) {
        $negocioId = (int)$this->request->getParam('pass.0');
        if ($this->Negocios->isOwnedBy($negocioId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}

    public function index()
    {
        $this->paginate = [
            'contain' => ['Lugares']
        ];
        $negocios = $this->paginate($this->Negocios);

        $this->set(compact('negocios'));
        $this->set('_serialize', ['negocios']);
    }

    /**
     * View method
     *
     * @param string|null $id Negocio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $negocio = $this->Negocios->get($id, [
            'contain' => ['Lugares']
        ]);

        $this->set('negocio', $negocio);
        $this->set('_serialize', ['negocio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $negocio = $this->Negocios->newEntity();
        if ($this->request->is('post')) {
            $negocio = $this->Negocios->patchEntity($negocio, $this->request->getData());
            if ($this->Negocios->save($negocio)) {
                $this->Flash->success(__('The negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The negocio could not be saved. Please, try again.'));
        }
        $lugares = $this->Negocios->Lugares->find('list', ['limit' => 200]);
        $users = $this->Negocios->Users->find('list', ['limit' => 200]);
        $this->set(compact('negocio', 'lugares','users'));
        $this->set('_serialize', ['negocio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Negocio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
 /*   public function edit($id = null)
    {
        $negocio = $this->Negocios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $negocio = $this->Negocios->patchEntity($negocio, $this->request->getData());
            if ($this->Negocios->save($negocio)) {
                $this->Flash->success(__('The negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The negocio could not be saved. Please, try again.'));
        }
        $lugares = $this->Negocios->Lugares->find('list', ['limit' => 200]);
        $this->set(compact('negocio', 'lugares'));
        $this->set('_serialize', ['negocio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Negocio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $negocio = $this->Negocios->get($id);
        if ($this->Negocios->delete($negocio)) {
            $this->Flash->success(__('The negocio has been deleted.'));
        } else {
            $this->Flash->error(__('The negocio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function perfil($id = null){
        $negocio = $this->Negocios->get($id, [
            'contain' => []
        ]);

        //traigo informacion de local
            $negocio = $this->Negocios->patchEntity($negocio, $this->request->getData());
            $fportada = null;
            $fperfil = null;
            $query = TableRegistry::get('ImagenesNegocios')->find();
            $imagenes = $query->select(['foto','ubicacion'])->where(['negocios_id' => $negocio->id])->toArray();
            foreach($imagenes as $imagen):
                if ($imagen->ubicacion == 'perfil'){
                $fperfil = '../../files/ImagenesNegocios/foto/'. $imagen->foto;
                }
                if ($imagen->ubicacion == 'portada'){
                $fportada = '../../files/ImagenesNegocios/foto/'. $imagen->foto;
                }   
            endforeach;
        //traigo informacion de productos
            $query2 = TableRegistry::get('Productos')->find();
            $productos = $query2->select(['id','titulo','cuerpo','fecha','precio'])->where(['negocios_id' => $negocio->id])->toArray();
        //traigo las imagenes del producto
            foreach($productos as $producto):
                $query3 = TableRegistry::get('ImagenesProductos')->find();
                $imgproductos = $query3->select(['foto','numero'])->where(['productos_id' => $producto->id])->toArray();
                foreach($imgproductos as $imgproducto):
                    $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                endforeach;   
            $imagenesproductos[] = $imgproductos;
            endforeach;
            if(is_null($fperfil)){
                $fperfil = '../../img/fotodeperfil.png';
            }
            if(is_null($fportada)){
                $fportada = '../../img/fotodeportada.png';
            }
        //traigo la ciudad de la cual es el comercio
            $query4 = TableRegistry::get('Lugares')->find();
            $ubicacion = $query4->select(['nombre'])->where(['id' => $negocio->lugares_id])->toArray();
        //traigo los tags del comercio
            $tagsnegocio = null;
            $conexion = ConnectionManager::get('default');
            $tags = $conexion->execute('Call traertags(?)',[$negocio->id])->fetchAll('assoc');
            //nada mas me falta algo que los saque del vector y los ponga interlacados por ,
          //  $tagsnegocio = implode(',',$tags);
            foreach ($tags as $tag) {
                if(is_null($tagsnegocio)){
                    $tagsnegocio = implode($tag);
                 } else {
                  $tagsnegocio = $tagsnegocio .' '.'-'.' '. implode($tag);
                }
            }
            if (is_null($tagsnegocio)) {
             $tagsnegocio = ' ';
            }
            $this->set(compact('negocio','fperfil','fportada','productos','imagenesproductos','ubicacion','tagsnegocio'));
            $this->set('_serialize', ['negocio','fperfil','fportada','productos','imagenesproductos','ubicacion','tagsnegocio']);
            //Ahora ya tengo la info de las imagenes y del comercio, solo la tengo que poner en el sitio.
             //   return $this->redirect(['action' => 'index']);
            
    }

        public function edit($id=1){

            $negocio = $this->Negocios->find()->where(['users_id' =>  $this->Auth->user('id')])->limit('1');
        //si esto esta vacio tengo que redirigir a error 500
        //traigo informacion de local
            foreach ($negocio as $neg) {
                $negocio = $this->Negocios->patchEntity($neg, $this->request->getData());
            }
            $fportada = null;
            $fperfil = null;
            $query = TableRegistry::get('ImagenesNegocios')->find();
            $imagenes = $query->select(['foto','ubicacion'])->where(['negocios_id' => $negocio->id])->toArray();
            foreach($imagenes as $imagen):
                if ($imagen->ubicacion == 'perfil'){
                $fperfil = '../../files/ImagenesNegocios/foto/'. $imagen->foto;
                }
                if ($imagen->ubicacion == 'portada'){
                $fportada = '../../files/ImagenesNegocios/foto/'. $imagen->foto;
                }   
            endforeach;
        //traigo informacion de productos
            $query2 = TableRegistry::get('Productos')->find();
            $productos = $query2->select(['id','titulo','cuerpo','fecha','precio'])->where(['negocios_id' => $negocio->id])->toArray();
        //traigo las imagenes del producto
            foreach($productos as $producto):
                $query3 = TableRegistry::get('ImagenesProductos')->find();
                $imgproductos = $query3->select(['foto','numero'])->where(['productos_id' => $producto->id])->toArray();
                foreach($imgproductos as $imgproducto):
                    $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                endforeach;   
            $imagenesproductos[] = $imgproductos;
            endforeach;
            if(is_null($fperfil)){
                $fperfil = '../../img/fotodeperfil.png';
            }
            if(is_null($fportada)){
                $fportada = '../../img/fotodeportada.png';
            }
        //traigo la ciudad de la cual es el comercio
            $query4 = TableRegistry::get('Lugares')->find();
            $ubicacion = $query4->select(['nombre'])->where(['id' => $negocio->lugares_id])->toArray();
        //traigo los tags del comercio
            $tagsnegocio = null;
            $conexion = ConnectionManager::get('default');
            $tags = $conexion->execute('Call traertags(?)',[$negocio->id])->fetchAll('assoc');
            //nada mas me falta algo que los saque del vector y los ponga interlacados por ,
          //  $tagsnegocio = implode(',',$tags);
            foreach ($tags as $tag) {
                if(is_null($tagsnegocio)){
                    $tagsnegocio = implode($tag);
                 } else {
                  $tagsnegocio = $tagsnegocio .' '.'-'.' '. implode($tag);
                }
            }
            if (is_null($tagsnegocio)) {
             $tagsnegocio = ' ';
            }
            $this->set(compact('negocio','fperfil','fportada','productos','imagenesproductos','ubicacion','tagsnegocio'));
            $this->set('_serialize', ['negocio','fperfil','fportada','productos','imagenesproductos','ubicacion','tagsnegocio']);
            //Ahora ya tengo la info de las imagenes y del comercio, solo la tengo que poner en el sitio.
             //   return $this->redirect(['action' => 'index']);
            
    }
}
