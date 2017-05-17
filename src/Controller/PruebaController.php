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
        $query = TableRegistry::get('tags')->find();
        $tags = $query->select('nombre')->execute();
        foreach($tags as $tag){
            $vectortags[] = $tag[0];
        }
        $this->set(compact('vectortags'));
        $this->set('_serialize','vectortags'); 

    }
}
