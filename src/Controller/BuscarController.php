<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\EntityInterface;
use Cake\ORM\Query;
use Cake\Datasource\ConnectionManager;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class BuscarController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public $paginate = [
    // Other keys here.
    'maxLimit' => 12
];
    public function buscar()
    {
        
    if ($this->request->is('get')){
        $conexion = ConnectionManager::get('default');
        $productos = TableRegistry::get('Productos');
        $comercios= 0;
        if (isset($this->request->query['productos'])){
            $variable = $this->request->query['productos'];
            $tag = preg_replace('[^ A-Za-z0-9_-ñÑ]', '', $this->request->query['productos']);
                $tag = "%".$tag."%";
               $variable = $this->paginate($productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->where(['OR' => [['tags.nombre like :tag'],['productos.titulo like :tag']]])->bind(':tag',$tag,'string')->group(['negocios.nombre','negocios.telefono','negocios.direccion','negocios.descripcion','negocios.lugares_id','negocios.perfilfb','negocios.email','negocios.users_id','productos.id'])->order(['productos.fecha' => 'DESC']));
                foreach ($variable as $producto){
                    ///////// traigo las imagenes (no esta terminado)
                foreach($producto->imagenes_productos as $imgproducto):
                    $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                endforeach;   
                }
        }
        if (isset($this->request->query['comercios'])){
            $comercios = TableRegistry::get('Negocios');
        $tags = explode(' ',$this->request->query['comercios']);
            foreach ($tags as $tag){
                $tag = "%".$tag."%";
                $variable = $this->paginate($comercios->find('all')->contain(['ImagenesNegocios','Tags'])->innerJoinWith('ImagenesNegocios')->innerJoinWith('Tags')->where(['AND' => [['OR' => [['tags.nombre like :tag'],['negocios.nombre like :tag']]],['imagenesnegocios.ubicacion' => 'portada']]])->bind(':tag',$tag,'string'));
                foreach($variable as $comercio){
                    foreach ($comercio->imagenes_negocios as $imgcomercio){
                        $imgcomercio->foto = '../../files/ImagenesNegocios/foto/'.$imgcomercio->foto;
                    }
                }
            }
            $comercios = 1;
        }
        $productos = TableRegistry::get('Productos');
   //     $variable = $productos->find();
       
        $this->set(compact('variable','comercios','tags'));
        $this->set('_serialize', ['variable','comercios','tags']);
    }

    }
}