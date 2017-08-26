<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class ContactoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function contacto()
    {
        if ($this->request->is('post')) {
            $contacto = $this->request->getData();
            $email = new Email();
            $email->from([ $contacto['email'] => $contacto['nombre']])
    		->to('contacto@paseociudad.com')
   			->subject('Mensaje desde el sitio')
    		->send('La persona escribio:  <br>\n  ' . $contacto['mensaje'] . ' \n '.'Sus datos de contacto son, mail: '. $sumate['email']. ' y telefono: '.$sumate['telefono']);
            
            
               // return $this->redirect(['action' => 'index']);
            $this->set(compact('contacto'));
        $this->set('_serialize', ['contacto']);
            }
        }
    }