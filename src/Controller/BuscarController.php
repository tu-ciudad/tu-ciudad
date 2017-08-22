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
    'maxLimit' => 15
];
    
    public function initialize()
{
    parent::initialize();
    $this->loadComponent('stemmes');
}
    public function buscar()
    {
        
    if ($this->request->is('get')){
        $productos = TableRegistry::get('Productos');
        $comercios= 0;
        $categorias = 0;
        $variable = null;
        if (isset($this->request->query['productos'])){
            $tags = preg_replace('[^ A-Za-z0-9_-ñÑ]','', $this->request->query['productos']);
            $conectores = array("de", "para", "sin", "si", "con", "co", "no");
            $tags = str_replace($conectores, "", $tags);
            $tags = explode(' ', $tags, 4);
            $p = sizeof($tags);
            

            for ($i=0; $i < $p; $i++) { 
                if ($i == 0){
                 $consulta = "(Productos.cuerpo LIKE '%".$this->stemmes->stemm($tags[$i])."%' or Productos.titulo LIKE '%".$this->stemmes->stemm($tags[$i]."%')");
                } else {
                  $consulta = $consulta." AND (Productos.cuerpo LIKE '%".$this->stemmes->stemm($tags[$i])."%' or Productos.titulo LIKE '%".$this->stemmes->stemm($tags[$i]."%')");  
                }
            }
            $variable = $this->paginate($productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->where($consulta)->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id'])->order(['Productos.fecha' => 'DESC']));

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
            $tags = preg_replace('[^ A-Za-z0-9_-ñÑ]','', $this->request->query['comercios']);
            $conectores = array("de", "para", "sin", "si", "con", "co", "no");
            $tags = str_replace($conectores, "", $tags);
            $tags = explode(' ', $tags, 4);
            $p = sizeof($tags);
            

            for ($i=0; $i < $p; $i++) { 
                  if ($i == 0){
                 $consulta = "(Negocios.nombre LIKE '%".$this->stemmes->stemm($tags[$i])."%' or Negocios.descripcion LIKE '%".$this->stemmes->stemm($tags[$i]."%')");
                } else {
                  $consulta = $consulta." AND (Negocios.nombre LIKE '%".$this->stemmes->stemm($tags[$i])."%' or Negocios.descripcion LIKE '%".$this->stemmes->stemm($tags[$i]."%')");  
                }
            }
                $variable = $this->paginate($comercios->find('all')->contain(['ImagenesNegocios','Tags'])->innerJoinWith('ImagenesNegocios')->innerJoinWith('Tags')->where(['AND' => [$consulta],['ImagenesNegocios.ubicacion' => 'portada']])->group(['Negocios.id','Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id']));
                foreach($variable as $comercio){
                    foreach ($comercio->imagenes_negocios as $imgcomercio){
                        $imgcomercio->foto = '../../files/ImagenesNegocios/foto/'.$imgcomercio->foto;
                    }
                }
            $comercios = 1;
        }
        if (isset($this->request->query['categorias'])){
            $tags = explode(' ',$this->request->query['categorias']);
                $variable = $this->paginate($productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->where(['Tags.nombre IN' => $tags])->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id'])->order(['Productos.fecha' => 'DESC']));

        foreach ($variable as $producto){
                    foreach($producto->imagenes_productos as $imgproducto):
                         $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                    endforeach; 
        }
        $categorias = 1;  
        }
        }
       
        $this->set(compact('variable','comercios','tags','categorias'));
        $this->set('_serialize', ['variable','comercios','tags','categorias']);
        }
    

   public function categorias(){
        if ($this->request->is('get')){
            $productos = TableRegistry::get('Productos');
             $tags = explode(' ',$this->request->query['categorias']);
                $variable = $productos->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->where(['Tags.nombre IN' => $tags])->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id'])->order(['Productos.fecha' => 'DESC']);

        foreach ($variable as $producto){
                    foreach($producto->imagenes_productos as $imgproducto):
                         $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                    endforeach; 
        }  

        $this->set(compact('variable'));
        $this->set('_serialize', ['variable']);
        }
    }

    //lematizador-------------


}

