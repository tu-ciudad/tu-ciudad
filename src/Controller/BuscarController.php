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
    public function index()
    {
        
    if ($this->request->is('get')){
        $conexion = ConnectionManager::get('default');
        $variable = $this->request->query['articulos'];
        if (isset($this->request->query['articulos'])){
            $tags = explode(' ',$this->request->query['articulos']);
            foreach ($tags as $tag){
            $consulta = $conexion->execute('Call traerproductostags(?)',[$tag])->fetchAll('assoc');
            $productos[] = $consulta;
            }
            if(!($variable)){
                $variable = 'nada';
            }
            $variable = $productos;
        }
        if (isset($this->request->query['comercios'])){
            $variable = 'comercios';
        }
        $this->set(compact('variable'));
        $this->set('_serialize', ['variable']);
    }

    }
}