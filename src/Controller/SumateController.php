<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class SumateController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function sumate()
    {
        if ($this->request->is('post')) {
            $sumate = $this->request->getData();
            $email = new Email();
            $email->from([ $sumate['email'] => $sumate['nombre']])
            ->to('paseociudad@gmail.com')
            ->subject('Nuevo Comercio')
            ->send('La persona escribio:  <br>\n  ' . $sumate['mensaje'] . ' \n '.'Sus datos de contacto son, mail: '. $sumate['email']. ' y telefono: '.$sumate['telefono']);
            
            
               // return $this->redirect(['action' => 'index']);
            $this->set(compact('sumate'));
            $this->set('_serialize', ['sumate']);
            }
            $this->Flash->error(__('The negocio could not be saved. Please, try again.'));
        }
}
