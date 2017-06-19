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
    public function buscar()
    {
        
    if ($this->request->is('get')){
        $conexion = ConnectionManager::get('default');
        $variable = $this->request->query['productos'];
        if (isset($this->request->query['productos'])){
            $productos=null;
            $tags = explode(' ',$this->request->query['productos']);
            foreach ($tags as $tag){
                $consulta = $conexion->execute('Call traerproductostags(?)',[$tag])->fetchAll('assoc');
                foreach ($consulta as $producto){
                    ///////// traigo las imagenes (no esta terminado)
                $query3 = TableRegistry::get('ImagenesProductos')->find();
                $imgproductos = $query3->select(['foto','numero'])->where(['productos_id' => $producto['id']])->toArray();
                foreach($imgproductos as $imgproducto):
                    $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                    $producto[] = $imgproducto;
                endforeach;   
                    /////////////////////////////////////////////////////

                    $productos[] = $producto;
                }
            }
            $variable = $productos;
        }
        if (isset($this->request->query['comercios'])){
            $comercios=null;
        $tags = explode(' ',$this->request->query['comercios']);
            foreach ($tags as $tag){
                $consulta = $conexion->execute('Call traercomercios(?)',[$tag])->fetchAll('assoc');
                foreach ($consulta as $comercio){
                    $comercios[] = $comercio;
                }
            }
            $variable = $comercios;
        }
        $this->set(compact('variable'));
        $this->set('_serialize', ['variable']);
    }

    }
}