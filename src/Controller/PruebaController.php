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
        $tagstable = TableRegistry::get('tags');
        $query = $tagstable->find();
        $data = $query->toArray();
        $vectortags = json_encode($data);
        //debug($vectortags);
        
        $this->set(compact('vectortags'));
        $this->set('_serialize','vectortags'); 

    }
}
