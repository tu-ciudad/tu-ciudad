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

    public $paginate = [
    // Other keys here.
    'maxLimit' => 25
];

    private function llenar($id,$orden = null){
          //traigo informacion de local
            $fportada = null;
            $fperfil = null;
            $productostags = null;
            $i = 0;
            $negocio = $this->Negocios->get($id, [
              'contain' => ['UbicacionesNegocios','ImagenesNegocios','Tags','Lugares']
        ]);
            $productos = TableRegistry::get('Productos');
            switch ($orden) {
                case 1:
                    $productos = $productos->find('all')->contain(['ImagenesProductos','Tags'])->where(['Productos.negocios_id' => $negocio->id])->group(['Productos.id'])->order(['Productos.precio' => 'DESC']);
                    break;
                
                case 2:
                    $productos = $productos->find('all')->contain(['ImagenesProductos','Tags'])->where(['Productos.negocios_id' => $negocio->id])->group(['Productos.id'])->order(['Productos.precio' => 'ASC']);
                    break;
                default:
                    $productos = $productos->find('all')->contain(['ImagenesProductos','Tags'])->where(['Productos.negocios_id' => $negocio->id])->group(['Productos.id'])->order(['Productos.fecha' => 'DESC']);
                    break;
            }
            //acomodo la ruta de las imagenes de negocios
            foreach($negocio->imagenes_negocios as $imagen):
                $imagen->foto = '../../files/ImagenesNegocios/foto/'. $imagen->foto;
            endforeach;
            //acomodo la ruta de las imagenes de los productos
            foreach ($productos as $producto) {
                foreach ($producto->imagenes_productos as $imgproducto) {
                     $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                }
            }
            $tagsnegocio = null;

            //veo la cantidad de tags que  tiene el local. lo hardcodeo en 1 porque no me anda internet. la idea es ver ese tamaño y despues generar un rand de 0 a esa cantidad. para seleccionar un tag aleatorio

            
            foreach ($negocio->tags as $tag) {
                if(is_null($tagsnegocio)){
                    $tagsnegocio = $tag->nombre;
                 } else {
                  $tagsnegocio = $tagsnegocio .' '.'-'.' '. $tag->nombre;
                }
            }
            if (is_null($tagsnegocio)) {
             $tagsnegocio = ' ';
            }
        $tagstable = TableRegistry::get('tags');
        $data = $tagstable->find()->toArray();
        $vectortags = json_encode($data);
        //traigo dos comercios que tengan tags coincidentes
        $cantidadtags = count($negocio->tags);
        $recomendados[] = 0;
        if($cantidadtags > 1){
            $recomendados = $this->Negocios->find('all')->contain(['UbicacionesNegocios','ImagenesNegocios','Tags','Lugares'])->innerJoinWith('Tags')->group(['Negocios.id','Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id'])->where(['AND' => [['OR' => [['Tags.nombre' => $negocio->tags[0]->nombre],['Tags.nombre' => $negocio->tags[1]->nombre]]],['Negocios.id !=' =>  $negocio->id]]])->limit('2')->order('rand()');
        }
        if($cantidadtags === 1){
            $recomendados = $this->Negocios->find('all')->contain(['UbicacionesNegocios','ImagenesNegocios','Tags','Lugares'])->innerJoinWith('Tags')->group(['Negocios.id','Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id'])->where(['AND' => [['Tags.nombre' => $negocio->tags[0]->nombre],['Negocios.id !=' =>  $negocio->id]]])->group(['Negocios.id'])->limit('2')->order('rand()');
                    }
        $cantrecomendados = (count($recomendados));
        if($cantrecomendados <> 2){
            $recomendados = $this->Negocios->find('all')->contain(['UbicacionesNegocios','ImagenesNegocios','Tags','Lugares'])->innerJoinWith('Tags')->group(['Negocios.id','Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id'])->where(['Negocios.id !=' =>  $negocio->id])->group(['Negocios.id'])->limit('2')->order('rand()');
                    }
        foreach($recomendados as $recomendado):
            foreach($recomendado->imagenes_negocios as $imagen):
                $imagen->foto = '../../files/ImagenesNegocios/foto/'. $imagen->foto;
            endforeach;
        endforeach;

        //traigo los tags de todos los negocios
            $this->set(compact('negocio','productos','tagsnegocio','vectortags','recomendados'));
            $this->set('_serialize', ['negocio','productos','tagsnegocio','vectortags','recomendados']);
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
                $ubicacionesnegocios = TableRegistry::get('UbicacionesNegocios');
                $ubicacion = TableRegistry::get('UbicacionesNegocios')->newEntity([
                    'negocios_id' => $negocio->id,
                    'lat' => $negocio->lat,
                    'lng' => $negocio->lng
                ]);
                $ubicacionesnegocios->save($ubicacion);
            
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

        negociosController::llenar($id);
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

         if ($this->request->is('get')){
            if(isset($this->request->query['orden'])){
                $orden = $this->request->query['orden'];
            }
            if( $orden == 1 || $orden == 2 || $orden == 3){
                negociosController::llenar($id,$orden);
            } else {
                negociosController::llenar($id);
            }
        }

        //traigo informacion de local $this->request->query['orden']
           
            //Ahora ya tengo la info de las imagenes y del comercio, solo la tengo que poner en el sitio.
             //   return $this->redirect(['action' => 'index']);       
    }

    public function editar(){

            if($this->Auth->user('rol') == 'local'){
                $negocio = $this->Negocios->find()->where(['users_id' =>  $this->Auth->user('id')])->limit('1')->toArray();
                //si esto esta vacio tengo que redirigir a error 500
                //traigo informacion de local

                   negociosController::llenar($negocio[0]->id);
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
            if ($this->Auth->user('rol') === 'admin'){
                return $this->redirect(['action' => 'edit', $id]);
            } else {
                return $this->redirect(['action' => 'editar']);
            }
        }

    public function editardatos(){
        if ($this->request->is(['ajax'])) {
            if(isset($this->request->data['id'])){
            $negocio = $this->Negocios->get($this->request->data['id'], [
            'contain' => ['Tags']
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
                $tags = explode(",",$this->request->data['tags'],15);
                //cambio los tags
                if($this->Negocios->Tags->unlink($negocio,$negocio->tags)){
                    $tags = $this->Negocios->Tags->find()->where(['nombre IN' => $tags])->toArray();
                    if($this->Negocios->Tags->link($negocio,$tags)){

                        $this->Flash->success(__('The producto has been saved.'));
                    }
                }
            if ($this->Auth->user('rol') === 'admin'){
                return $this->redirect(['action' => 'edit', $negocio->id]);
            } else {
                return $this->redirect(['action' => 'editar']);
            }
            }
        }
    }
    }
}
