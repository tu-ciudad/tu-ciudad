<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Productos Controller
 *
 * @property \App\Model\Table\ProductosTable $Productos
 */
class ProductosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Negocios']
        ];
        $productos = $this->paginate($this->Productos);

        $this->set(compact('productos'));
        $this->set('_serialize', ['productos']);
    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => ['Negocios']
        ]);

        $this->set('producto', $producto);
        $this->set('_serialize', ['producto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //arreglar el problema, cuando paso el nombre hay un error.. las variables estan pasadas en la linea 182 del otro doc
        $this->autoRender = false;
        //$data = $this->request->data;
        //echo "<pre>",print_r($data),"</pre>";
        if ($this->request->is('ajax')) {
            $producto = $this->Productos->newEntity(); //se pueden asignar todos juntos pero tengo que poner unos campos en una lista blanca (verificar eso despues)
            $producto->set('titulo', $this->request->data['titulo']);
            $producto->set('fecha ', $this->request->data['fecha']);
            $producto->set('precio', $this->request->data['precio']);
            $producto->set('cuerpo', $this->request->data['cuerpo']);
            $producto->set('negocios_id', $this->request->data['negociosid']);
            $sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
            $targetPath = WWW_ROOT . 'files' .DS.$_FILES['file']['name']; // Target path where file is to be stored
            move_uploaded_file($sourcePath, $targetPath);    // Moving Uploaded file
            $producto->fecha = date('Y-m-d H:i:s');
            echo print_r($sourcePath);
            echo print_r($targetPath);
            if($this->Productos->save($producto)){ //Cargue el producto, ahora cargo las imagenes
                                                   //Para que el metodo sea infable cada negocio SOLO debe poder tener un producto con cada titulo, no debe poder repetirse, sino hay que cambiar el funcionamiento (añadir esta verificacion arriba)
                $producto_id = $this->Productos->find()->select(['id'])->where(['negocios_id' => $producto->get('negocios_id'), 'ubicacion' => $prod->ubicacion])
//terminar consulta




            };
 }
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Productos->patchEntity($producto, $this->request->getData());
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto could not be saved. Please, try again.'));
        }
        $negocios = $this->Productos->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'negocios'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Productos->get($id);
        if ($this->Productos->delete($producto)) {
            $this->Flash->success(__('The producto has been deleted.'));
        } else {
            $this->Flash->error(__('The producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
