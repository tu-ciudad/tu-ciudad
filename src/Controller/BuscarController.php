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
    
    public function initialize()
{
    parent::initialize();
    $this->loadComponent('Stemmes');
}
    public function buscar()
    {
        
    if ($this->request->is('get')){
        $productos = TableRegistry::get('Productos');
        $comercios= 0;
        $variable = null;
        if (isset($this->request->query['productos'])){
            $tags = preg_replace('[^ A-Za-z0-9_-ñÑ]','', $this->request->query['productos']);
            $conectores = array("de", "para", "sin", "si", "con", "co", "no");
            $tags = str_replace($conectores, "", $tags);
            $tags = explode(' ', $tags, 4);
            $p = sizeof($tags);
            

            for ($i=0; $i < $p; $i++) { 
                 $tags[$i] = "%".$this->Stemmes->stemm($tags[$i])."%";
            }

            switch($p){
            case 1: 
            $variable = $this->paginate($productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->where(['OR' => [['Productos.cuerpo like :tag'],['Productos.titulo like :tag']]])->bind(':tag',$tags[0],'string')->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id'])->order(['Productos.fecha' => 'DESC']));
            break;
            case 2:
            $variable = $this->paginate($productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->
                where(['AND' => ['OR' => [['Productos.cuerpo like :tag1'],['Productos.titulo like :tag1']]],['OR' => [['Productos.cuerpo like :tag'],['Productos.titulo like :tag']]]])
                ->bind(':tag',$tags[0],'string')->bind(':tag1',$tags[1],'string')->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id'])->order(['Productos.fecha' => 'DESC']));
            break;
            case 3:
            $variable = $this->paginate($productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->
                where(['AND' => ['OR' => [['Productos.cuerpo like :tag1'],['Productos.titulo like :tag1']]],['OR' => [['Productos.cuerpo like :tag'],['Productos.titulo like :tag']]],['OR' => [['Productos.cuerpo like :tag2'],['Productos.titulo like :tag2']]]])
                ->bind(':tag',$tags[0],'string')->bind(':tag1',$tags[1],'string')->bind(':tag2',$tags[2],'string')->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id'])->order(['Productos.fecha' => 'DESC']));
            break;
            case 4:
            $variable = $this->paginate($productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->
                where(['AND' => ['OR' => [['Productos.cuerpo like :tag1'],['Productos.titulo like :tag1']]],['OR' => [['Productos.cuerpo like :tag'],['Productos.titulo like :tag']]],['OR' => [['Productos.cuerpo like :tag2'],['Productos.titulo like :tag2']]],['OR' => [['Productos.cuerpo like :tag3'],['Productos.titulo like :tag3']]]])
                ->bind(':tag',$tags[0],'string')->bind(':tag1',$tags[1],'string')->bind(':tag2',$tags[2],'string')->bind(':tag3',$tags[3],'string')->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id'])->order(['Productos.fecha' => 'DESC']));
            break;
            default:
            echo('hola');
            }
                foreach ($variable as $producto){
                    foreach($producto->imagenes_productos as $imgproducto):
                         $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                    endforeach; 
                }  

/*


                $tag = "%".$tag."%";
               $variable = $this->paginate($productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->where(['OR' => [['Tags.nombre like :tag'],['Productos.titulo like :tag']]])->bind(':tag',$tag,'string')->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id'])->order(['Productos.fecha' => 'DESC']));
                foreach ($variable as $producto){
                    foreach($producto->imagenes_productos as $imgproducto):
                         $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                    endforeach;   
                }*/
        }
        if (isset($this->request->query['comercios'])){
            $comercios = TableRegistry::get('Negocios');
        $tags = explode(' ',$this->request->query['comercios']);
            foreach ($tags as $tag){
                $tag = "%".$tag."%";
                $variable = $this->paginate($comercios->find('all')->contain(['ImagenesNegocios','Tags'])->innerJoinWith('ImagenesNegocios')->innerJoinWith('Tags')->where(['AND' => [['OR' => [['Tags.nombre like :tag'],['Negocios.nombre like :tag']]],['ImagenesNegocios.ubicacion' => 'portada']]])->bind(':tag',$tag,'string')->group(['Negocios.id','Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id']));
                foreach($variable as $comercio){
                    foreach ($comercio->imagenes_negocios as $imgcomercio){
                        $imgcomercio->foto = '../../files/ImagenesNegocios/foto/'.$imgcomercio->foto;
                    }
                }
            }
            $comercios = 1;
        }

       
        $this->set(compact('variable','comercios','tags'));
        $this->set('_serialize', ['variable','comercios','tags']);
    }

    }

    //lematizador-------------


}

