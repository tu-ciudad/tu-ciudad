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
            $tags = $conexion->execute('Call selecttagnegocio(?)',[$negocio->id])->fetchAll('assoc');
            //nada mas me falta algo que los saque del vector y los ponga interlacados por ,
          //  $tagsnegocio = implode(',',$tags);

            //veo la cantidad de tags que  tiene el local. lo hardcodeo en 1 porque no me anda internet. la idea es ver ese tamaño y despues generar un rand de 0 a esa cantidad. para seleccionar un tag aleatorio

            
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
        //traigo dos comercios que tengan tags coincidentes
            $conexion = ConnectionManager::get('default');
            $cantidadtags = count($tags);
            $nrotag = rand(1,$cantidadtags) - 1;
        //    $tags[0];//aca va el numero que me dio el aleatorio.este es el comodin que va
            $relacionados = $conexion->execute('SELECT * FROM negocios inner join negocios_tags on (negocios.id = negocios_tags.negocios_id) inner join tags on (tags.id = negocios_tags.tags_id) where tags.nombre = ? and negocios.id <> ? order by rand() limit 2;',[$tags[$nrotag]['nombre'], $negocio->id])->fetchAll('assoc');
        //traigo los tags de todos los negocios
            $this->set(compact('negocio','fperfil','fportada','productos','imagenesproductos','ubicacion','tagsnegocio','vectortags','orden','relacionados'));
            $this->set('_serialize', ['negocio','fperfil','fportada','productos','imagenesproductos','ubicacion','tagsnegocio','vectortags','orden','relacionados']);
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


    public function perfil($id = null, $orden = null){
        $negocio = $this->Negocios->get($id, [
            'contain' => []
        ]);
         if ($this->request->is('get')){
            if(isset($this->request->query['orden'])){
                $orden = $this->request->query['orden'];
            }
            if( $orden == 1 || $orden == 2 || $orden == 3){
                negociosController::llenar($negocio,$orden);
            } else {
                negociosController::llenar($negocio);
            }
        }

        //traigo informacion de local $this->request->query['orden']
           
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
            
            $id = $this->request->data['id'];
            //lunes
            $lunes = null;
            if ($this->request->data['lunes1'] !== '' && $this->request->data['lunes2'] !== ''){
                $lunes = $this->request->data['lunes1'].' '.'-'.' '. $this->request->data['lunes2'];
                if ($this->request->data['lunes3'] !== '' && $this->request->data['lunes4'] !== ''){
                    $lunes = $lunes .' '.'|'.' ' . $this->request->data['lunes3'] .' '.'-'.' '. $this->request->data['lunes4'];
                }
            }


            
            //martes
            $martes = null;
            if ($this->request->data['martes1'] !== '' && $this->request->data['martes2'] !== ''){
                $martes = $this->request->data['martes1'].' '.'-'.' '. $this->request->data['martes2'];
                if ($this->request->data['martes3'] !== '' && $this->request->data['martes4'] !== ''){
                    $martes = $martes .' '.'|'.' ' . $this->request->data['martes3'] .' '.'-'.' '. $this->request->data['martes4'];
                }
            }

           
            
            //miercoles
            $miercoles = null;
            if ($this->request->data['miercoles1'] !== '' && $this->request->data['miercoles2'] !== ''){
                $miercoles = $this->request->data['miercoles1'].' '.'-'.' '. $this->request->data['miercoles2'];
                if ($this->request->data['miercoles3'] !== '' && $this->request->data['miercoles4'] !== ''){
                    $miercoles = $miercoles .' '.'|'.' ' . $this->request->data['miercoles3'] .' '.'-'.' '. $this->request->data['miercoles4'];
                }
            }

            
            
            //jueves
            $jueves = null;
            if ($this->request->data['jueves1'] !== '' && $this->request->data['jueves2'] !== ''){
                $jueves = $this->request->data['jueves1'].' '.'-'.' '. $this->request->data['jueves2'];
                if ($this->request->data['jueves3'] !== '' && $this->request->data['jueves4'] !== ''){
                    $jueves = $jueves .' '.'|'.' ' . $this->request->data['jueves3'] .' '.'-'.' '. $this->request->data['jueves4'];
                }
            }


            
            //viernes
            $viernes = null;
            if ($this->request->data['viernes1'] !== '' && $this->request->data['viernes2'] !== ''){
                $viernes = $this->request->data['viernes1'].' '.'-'.' '. $this->request->data['viernes2'];
                if ($this->request->data['viernes3'] !== '' && $this->request->data['viernes4'] !== ''){
                    $viernes = $viernes .' '.'|'.' ' . $this->request->data['viernes3'] .' '.'-'.' '. $this->request->data['viernes4'];
                }
            }


            
            //sabado
            $sabado = null;
            if ($this->request->data['sabado1'] !== '' && $this->request->data['sabado2'] !== ''){
                $sabado = $this->request->data['sabado1'].' '.'-'.' '. $this->request->data['sabado2'];
                 if ($this->request->data['sabado3'] !== '' && $this->request->data['sabado4'] !== ''){
                    $sabado = $sabado .' '.'|'.' ' . $this->request->data['sabado3'] .' '.'-'.' '. $this->request->data['sabado4'];
                }
            }


            
            //domingo
            $domingo = null;
            if ($this->request->data['domingo1'] !== '' && $this->request->data['domingo2'] !== ''){
                $domingo = $this->request->data['domingo1'].' '.'-'.' '. $this->request->data['domingo2'];
                if ($this->request->data['domingo3'] !== '' && $this->request->data['domingo4'] !== ''){
                    $domingo = $domingo .' '.'|'.' ' . $this->request->data['domingo3'] .' '.'-'.' '. $this->request->data['domingo4'];
                }
            }

            
            //feriado
            /*
            $feriado = null;
            if ($this->request->data['feriado1'] !== '' && $this->request->data['feriado2'] !== ''){
                $feriado = $this->request->data['feriado1'].' '.'-'.' '. $this->request->data['feriado2'];
                if ($this->request->data['feriado3'] !== '' && $this->request->data['feriado4'] !== ''){
                    $feriado = $feriado .' '.'|'.' ' . $this->request->data['feriado3'] .' '.'-'.' '. $this->request->data['feriado4'];
                }
            }     */ 
            }
            $query = TableRegistry::get('negocios')->query();
            $results = $query->update()->set(['lunes' => $lunes,'martes' => $martes,'miercoles' => $miercoles,'jueves' => $jueves,'viernes' => $viernes,'sabado' => $sabado,'domingo' => $domingo])->where(['id' => $id])->execute();
            if ($this->Auth->user['rol'] === 'admin'){
                return $this->redirect(['action' => 'edit','id' => $id]);
            } else {
                return $this->redirect(['action' => 'editar']);
            }
        }

    public function editardatos(){
        if ($this->request->is(['ajax'])) {
            if(isset($this->request->data['id'])){
            $negocio = $this->Negocios->get($this->request->data['id'], [
            'contain' => []
        ]);

            $negocio->set('descripcion', $this->request->data['descripcion']);
            $negocio->set('nombre', $this->request->data['nombre']);
            $negocio->set('direccion', $this->request->data['direccion']);
            if(isset($this->request->data['email']))
                $negocio->set('email', $this->request->data['email']);
            if(isset($this->request->data['telefono']))
                $negocio->set('telefono', $this->request->data['telefono']);
            if(isset($this->request->data['perfilfb']))
                $negocio->set('perfilfb', $this->request->data['perfilfb']);
            if ($this->Negocios->save($negocio)) {
            $conexion = ConnectionManager::get('default');
            $conexion->execute('call deletetagsnegocio(?)',[$negocio->get('id')]);
                //cambio los tags
                $negocios_tags = TableRegistry::get('negocios_tags');
                $tags = $this->request->data['tags'];
                $arraytags = explode(",", $tags);
                foreach($arraytags as $tag):
                        $querytags = $negocios_tags->query();
                         $querytags->insert(['negocios_id','tags_id'])->values(['negocios_id' => $negocio->get('id'),
                                                                 'tags_id' => $tag])->execute();
                endforeach;
            }
        }
    }
    }
}
