<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class PruebaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tags = TableRegistry::get('tags');
        $query = $tags->query();
        $tags = $query->select('nombre')->execute(); 
        $this->set(compact('tags'));
        $this->set('_serialize','tags'); 

    }
}
