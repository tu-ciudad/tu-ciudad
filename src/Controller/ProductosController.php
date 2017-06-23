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
            $ImagenesProductos = TableRegistry::get('ImagenesProductos');
            $productos_tags = TableRegistry::get('productos_tags');
            $producto = $this->Productos->newEntity(); //se pueden asignar todos juntos pero tengo que poner unos campos en una lista blanca (verificar eso despues)
            $producto->set('titulo', $this->request->data['titulo']);
            $producto->set('fecha', date('Y-m-d H:i:s'));
            $producto->set('precio', $this->request->data['precio']);
            $producto->set('cuerpo', $this->request->data['cuerpo']);
            $producto->set('negocios_id', $this->request->data['negociosid']);
            $tags = $this->request->data['tags'];
            $cantidad =  $this->request->data['cantidad'];
            $arraytags = explode(",", $tags);
            if($this->Productos->save($producto)){
                //traigo los ids de los tags
       foreach($arraytags as $tag):
                $querytags = $productos_tags->query();
                $querytags->insert(['productos_id','tags_id'])->values(['productos_id' => $producto->get('id'),
                                                                        'tags_id' => $tag])->execute();
        endforeach;

            for($i=1; $i <= $cantidad; $i++){
                $target_path = WWW_ROOT . 'files' .DS. 'ImagenesProductos' .DS;
                //$ext = explode('.', basename( $_FILES['file']['name'][$i]));
                $baseFromJavascript = $this->request->data['foto' . $i];
                $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $baseFromJavascript));
                $nombre = md5(uniqid()) . "." ;
                $target_path = $target_path . $nombre ;
                //$jpeg_quality = 100;
                if(file_put_contents($target_path . "jpg", $data)) {
                    //$img = imagecreatefrompng($target_path . "png");
                    //imagejpeg($img, $target_path . "jpg", $jpeg_quality);
                    //list($width, $height) = getimagesize($_FILES['file']['tmp_name'][$i] );
                    //$response_target = ',..' .DS. 'files' .DS. 'ImagenesProductos' .DS. $nombre . '&' . $width . '&' . $height;
                        //echo "The file has been uploaded successfully <br />";
                        //echo json_encode($response_target);
                        //foreach($response_target as $a)
                         //echo ($response_target);
                    //**********************************************************************
                    $tmp_path = WWW_ROOT . 'files' .DS. 'tmp' .DS;
                    $origen = $target_path . "jpg";
                    $destino = $target_path . "jpg";
                    $destino_temporal = tempnam($tmp_path,"tmp");
                    redimensionar_jpeg($origen, $destino_temporal, 800, 800, 85);
                     
                    // guardamos la imagen
                    $fp=fopen($destino,"w");
                    fputs($fp,fread(fopen($destino_temporal,"r"),filesize($destino_temporal)));
                    fclose($fp);
                     
                    // mostramos la imagen
                   
                     
                    function redimensionar_jpeg($img_original, $img_nueva, $img_nueva_anchura, $img_nueva_altura, $img_nueva_calidad)
                    {
                        // crear una imagen desde el original 
                        $img = ImageCreateFromJPEG($img_original);
                        // crear una imagen nueva 
                        $thumb = imagecreatetruecolor($img_nueva_anchura,$img_nueva_altura);
                        // redimensiona la imagen original copiandola en la imagen 
                        ImageCopyResized($thumb,$img,0,0,0,0,$img_nueva_anchura,$img_nueva_altura,ImageSX($img),ImageSY($img));
                        // guardar la nueva imagen redimensionada donde indicia $img_nueva 
                        ImageJPEG($thumb,$img_nueva,$img_nueva_calidad);
                        ImageDestroy($img);
                    }
                        
                        unlink($destino_temporal);

                        //*****************************************************************
                        $query = $ImagenesProductos->query(); 
                         $query->insert(['foto','numero','productos_id'])->values([
                        'foto' => $nombre . "jpg",
                        'numero' => $i,
                        'productos_id' => $producto->get('id')
                        ])
                        ->execute();
                 } else{
                    echo "There was an error uploading the file, please try again! <br />";
                 }

                }   
                                    //En este caso no puedo guardar el objeto, porque como es una recursion, me va a guardar el id insertado en un campo, y me va a modificar siempre el mismo registro, guardandome la ultima foto, porque contiene el id de la primera insercion. La guardo despues del for asi hago un insert con todos los valores
            }
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
