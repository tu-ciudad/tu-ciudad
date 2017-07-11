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
    if (in_array($this->request->getParam('action'), ['editar'])) {
        $negocioId = (int)$this->request->getParam('pass.0');
        if ($this->Negocios->isOwnedBy($negocioId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}
    private function llenar($negocio,$orden = null){
          //traigo informacion de local
            $fportada = null;
            $fperfil = null;
            $productostags = null;
            $i = 0;
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
            switch($orden) {
                case 1:
                   $productos = $query2->select(['id','titulo','cuerpo','fecha','precio'])->where(['negocios_id' => $negocio->id])->order(['precio' => 'DESC'])->toArray();
                    break;

                case 2:
                    $productos = $query2->select(['id','titulo','cuerpo','fecha','precio'])->where(['negocios_id' => $negocio->id])->order(['precio' => 'ASC'])->toArray();
                    break;

                default:
                    $productos = $query2->select(['id','titulo','cuerpo','fecha','precio'])->where(['negocios_id' => $negocio->id])->order(['fecha' => 'DESC'])->toArray();
            }
       
            foreach($productos as $producto):
                $productostags = null;
                //traigo los tags del producto
                $conexion = ConnectionManager::get('default');
                $tagsprod = $conexion->execute('Call traertagsproductos(?)',[$producto->id])->fetchAll('assoc');
            foreach($tagsprod as $tag) {
                if(is_null($productostags)){
                    $productostags = implode($tag);
                 } else {
                  $productostags = $productostags .' '.'-'.' '. implode($tag); //recorro cada tag y lo voy concatenando
                }
            }
            $tagsproducto[$i] = $productostags;
            $i++;
                //traigo las imagenes del producto
                $query3 = TableRegistry::get('ImagenesProductos')->find(); //traigo las imagenes del producto
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
        $tagstable = TableRegistry::get('tags');
        $query = $tagstable->find();
        $data = $query->toArray();
        $vectortags = json_encode($data);
            if (is_null($tagsnegocio)) {
             $tagsnegocio = ' ';
            }
            $this->set(compact('negocio','fperfil','fportada','productos','imagenesproductos','ubicacion','tagsnegocio','vectortags','tagsproducto'));
            $this->set('_serialize', ['negocio','fperfil','fportada','productos','imagenesproductos','ubicacion','tagsnegocio','vectortags','tagsproducto']);
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
    public function edit($id = null)
    {
        $negocio = $this->Negocios->get($id, [
            'contain' => []
        ]);
        negociosController::llenar($negocio);
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
        negociosController::llenar($negocio);
         if ($this->request->is('get') && $this->request->query['orden']){
            if( $this->request->query['orden'] == 1 || $this->request->query['orden'] == 2 || $this->request->query['orden'] == 3){
                $orden = $this->request->query['orden'];
                negociosController::llenar($negocio,$orden);
            } else {
                negociosController::llenar($negocio);
            }
        }
        //traigo informacion de local
           
            //Ahora ya tengo la info de las imagenes y del comercio, solo la tengo que poner en el sitio.
             //   return $this->redirect(['action' => 'index']);
            
    }

    public function editar(){

            if($this->Auth->user('rol') == 'local'){
                    $negocio = $this->Negocios->find()->where(['users_id' =>  $this->Auth->user('id')])->limit('1');
                //si esto esta vacio tengo que redirigir a error 500
                //traigo informacion de local
                    foreach ($negocio as $neg) {
                        $negocio = $this->Negocios->patchEntity($neg, $this->request->getData());
                    }
                   negociosController::llenar($negocio);
            } else {
                return $this->redirect(['controller'=> 'pages', 'action' => 'display']);
            }
            
    }
    public function cambiohorario(){

        if ($this->request->is('post')) {
            $id = 2;
            //lunes
            $lunes = null;
            if (!is_null($this->request->data['lunes1']) && !is_null($this->request->data['lunes2'])){
                $lunes = $this->request->data['lunes1'].' '.'-'.' '. $this->request->data['lunes2'];
            } else {
                $lunes = 'Cerrado';
            }

            if (!is_null($this->request->data['lunes3']) && !is_null($this->request->data['lunes4'])){
                $lunes = $lunes .' '.'|'.' ' . $this->request->data['lunes3'] .' '.'-'.' '. $this->request->data['lunes4'];
                }
            
            //martes
            $martes = null;
            if (!is_null($this->request->data['martes1']) && !is_null($this->request->data['martes2'])){
                $martes = $this->request->data['martes1'].' '.'-'.' '. $this->request->data['martes2'];
            } else {
                $martes = 'Cerrado';
            }

            if (!is_null($this->request->data['martes3']) && !is_null($this->request->data['martes4'])){
                $martes = $martes .' '.'|'.' ' . $this->request->data['martes3'] .' '.'-'.' '. $this->request->data['martes4'];
                }
            
            //miercoles
            $miercoles = null;
            if (!is_null($this->request->data['miercoles1']) && !is_null($this->request->data['miercoles2'])){
                $miercoles = $this->request->data['miercoles1'].' '.'-'.' '. $this->request->data['miercoles2'];
            } else {
                $miercoles = 'Cerrado';
            }

            if (!is_null($this->request->data['miercoles3']) && !is_null($this->request->data['miercoles4'])){
                $miercoles = $miercoles .' '.'|'.' ' . $this->request->data['miercoles3'] .' '.'-'.' '. $this->request->data['miercoles4'];
                }
            
            //jueves
            $jueves = null;
            if (!is_null($this->request->data['jueves1']) && !is_null($this->request->data['jueves2'])){
                $jueves = $this->request->data['jueves1'].' '.'-'.' '. $this->request->data['jueves2'];
            } else {
                $jueves = 'Cerrado';
            }

            if (!is_null($this->request->data['jueves3']) && !is_null($this->request->data['jueves4'])){
                $jueves = $jueves .' '.'|'.' ' . $this->request->data['jueves3'] .' '.'-'.' '. $this->request->data['jueves4'];
                }
            
            //viernes
            $viernes = null;
            if (!is_null($this->request->data['viernes1']) && !is_null($this->request->data['viernes2'])){
                $viernes = $this->request->data['viernes1'].' '.'-'.' '. $this->request->data['viernes2'];
            } else {
                $viernes = 'Cerrado';
            }

            if (!is_null($this->request->data['viernes3']) && !is_null($this->request->data['viernes4'])){
                $viernes = $viernes .' '.'|'.' ' . $this->request->data['viernes3'] .' '.'-'.' '. $this->request->data['viernes4'];
                }
            
            //sabado
            $sabado = null;
            if (!is_null($this->request->data['sabado1']) && !is_null($this->request->data['sabado2'])){
                $sabado = $this->request->data['sabado1'].' '.'-'.' '. $this->request->data['sabado2'];
            } else {
                $sabado = 'Cerrado';
            }

            if (!is_null($this->request->data['sabado3']) && !is_null($this->request->data['sabado4'])){
                $sabado = $sabado .' '.'|'.' ' . $this->request->data['sabado3'] .' '.'-'.' '. $this->request->data['sabado4'];
                }
            
            //domingo
            $domingo = null;
            if (!is_null($this->request->data['domingo1']) && !is_null($this->request->data['domingo2'])){
                $domingo = $this->request->data['domingo1'].' '.'-'.' '. $this->request->data['domingo2'];
            } else {
                $domingo = 'Cerrado';
            }

            if (!is_null($this->request->data['domingo3']) && !is_null($this->request->data['domingo4'])){
                $domingo = $domingo .' '.'|'.' ' . $this->request->data['domingo3'] .' '.'-'.' '. $this->request->data['domingo4'];
                }
            
            //feriado
            $feriado = null;
            if (!is_null($this->request->data['feriado1']) && !is_null($this->request->data['feriado2'])){
                $feriado = $this->request->data['feriado1'].' '.'-'.' '. $this->request->data['feriado2'];
            } else {
                $feriado = 'Cerrado';
            }

            if (!is_null($this->request->data['feriado3']) && !is_null($this->request->data['feriado4'])){
                $feriado = $feriado .' '.'|'.' ' . $this->request->data['feriado3'] .' '.'-'.' '. $this->request->data['feriado4'];
                }
            }
            $query = TableRegistry::get('negocios')->query();
            $results = $query->update()->set(['lunes' => $lunes,'martes' => $martes,'miercoles' => $miercoles,'jueves' => $jueves,'viernes' => $viernes,'sabado' => $sabado,'domingo' => $domingo,'feriado' => $feriado])->where(['id' => $id])->execute();
            if ($user['rol'] === 'admin'){
                return $this->redirect(['action' => 'index']);
            } else {
                return $this->redirect(['action' => 'editar']);
            }
        }
    }
        
