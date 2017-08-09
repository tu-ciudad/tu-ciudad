<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Filesystem\File;

/**
 * ImagenesNegocios Controller
 *
 * @property \App\Model\Table\ImagenesNegociosTable $ImagenesNegocios
 */
class ImagenesNegociosController extends AppController
{


    private function redimensionar_jpeg($img_original, $img_nueva, $img_nueva_anchura, $img_nueva_altura, $img_nueva_calidad)
    {
        // crear una imagen desde el original 
        $img = ImageCreateFromJPEG($img_original);
        // crear una imagen nueva 
        $thumb = imagecreatetruecolor($img_nueva_anchura,$img_nueva_altura);
        // redimensiona la imagen original copiandola en la imagen 
        ImageCopyResampled($thumb,$img,0,0,0,0,$img_nueva_anchura,$img_nueva_altura,ImageSX($img),ImageSY($img));
        // guardar la nueva imagen redimensionada donde indicia $img_nueva 
        ImageJPEG($thumb,$img_nueva,$img_nueva_calidad);
        ImageDestroy($img);
    }


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
        $imagenesNegocios = $this->paginate($this->ImagenesNegocios);

        $this->set(compact('imagenesNegocios'));
        $this->set('_serialize', ['imagenesNegocios']);
    }
   
    /**
     * View method
     *
     * @param string|null $id Imagenes Negocio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagenesNegocio = $this->ImagenesNegocios->get($id, [
            'contain' => ['Negocios']
        ]);

        $this->set('imagenesNegocio', $imagenesNegocio);
        $this->set('_serialize', ['imagenesNegocio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagenesNegocio = $this->ImagenesNegocios->newEntity();
        if ($this->request->is(['post','delete'])) {
            //borro una imagen si ya existe
          $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
          $target_path = WWW_ROOT . 'files' .DS. 'ImagenesNegocios' .DS. 'foto' .DS;
          $path = WWW_ROOT . 'files' .DS. 'ImagenesNegocios' .DS. 'foto' .DS;

          $imagen = $this->request->data['fotop1'];

          //hacer el trabajo que tomas no sabe hacer
          
          $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagen));
                $dimensions = imagecreatefromstring($data);

                //dimensiones de original, thumbnail.. $imgy_t1 = width original / 40px. regla de 3 simple.
                $imgx_o = imagesx($dimensions);
                $imgy_o = imagesy($dimensions);
                $imgx_t = 40;
                $imgy_t1 = imagesx($dimensions) / 40;
                $imgy_t2 = imagesy($dimensions) / $imgy_t1;
                $nombre = md5(uniqid());
                $target_path = $target_path . $nombre ;
                //$jpeg_quality = 100;
                if(file_put_contents($target_path . ".jpg", $data)) {

                    $tmp_path = WWW_ROOT . 'files' .DS. 'ImagenesNegocios' .DS. 'tmp' .DS;
                    $origen = $target_path . ".jpg";
                    $destino = $target_path . ".jpg";
                    $destino_t = $target_path . "_th.jpg";
                    $destino_temporal = tempnam($tmp_path,"tmp");
                    $destino_temporal_t = tempnam($tmp_path,"tmp");
                    imagenesNegociosController::redimensionar_jpeg($origen, $destino_temporal, $imgx_o, $imgy_o, 95);
                    imagenesNegociosController::redimensionar_jpeg($origen, $destino_temporal_t, $imgx_t, $imgy_t2, 50);
                     
                    // guardamos la imagen original
                    $fp=fopen($destino,"w");
                    fputs($fp,fread(fopen($destino_temporal,"r"),filesize($destino_temporal)));
                    fclose($fp);

                    // guardamos la imagen thumbnail
                    $fp_t=fopen($destino_t,"w");
                    fputs($fp_t,fread(fopen($destino_temporal_t,"r"),filesize($destino_temporal_t)));
                    fclose($fp_t);
                     
                    // mostramos la imagen
                   $imagen = $nombre . ".jpg";
                   $imagen_th = $nombre . "_th.jpg";

                        
                        unlink($destino_temporal);
                        unlink($destino_temporal_t);

                   $imagenesNegocio->set('foto', $imagen );
                   $imagenesNegocio->set('fototh', $imagen_th );

            //borro una imagen si existe
            $foto = $this->ImagenesNegocios->find()->select()->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
    ->toArray();
          foreach ($foto as $imagen) {
            $imagen = $path . $imagen->foto;
            unlink($imagen);
          }
            //borro los registros de la tabla si existen
          $query = $this->ImagenesNegocios->query();
          $query->delete()->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])->execute();
              //guardo la imagen nueva
          
                  $this->ImagenesNegocios->save($imagenesNegocio);

                }
        $negocios = $this->ImagenesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('imagenesNegocio', 'negocios'));
        $this->set('_serialize', ['imagenesNegocio']);
        } 
      }

     /*
        $imagenesNegocio = $this->ImagenesNegocios->newEntity();
        if ($this->request->is(['post','delete'])) {
            $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
            //borro una imagen si ya existe
            $query = $this->ImagenesNegocios->query();
            $ruta = $this->ImagenesNegocios->find()->select(['foto'])->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
    ->toArray();
    if ($ruta != null){
      if(is_array($ruta)){
          $ruta = $ruta[0]->foto;
          }
      else 
      {
        $ruta = $ruta->foto;
        }
            $query->delete()
    ->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
    ->execute();
            unlink( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $ruta);
        }
            //.................................
            if ($this->ImagenesNegocios->save($imagenesNegocio)) {
            $conexion = ConnectionManager::get('default');
            $res = $conexion->execute('Call renombrarfoto(?)',[$imagenesNegocio->foto])->fetchAll('assoc');
            $mensaje = $res[0]['@mensaje'];
           rename( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto, ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $mensaje);


$ruta =  '..' . '/' . 'files' . '/' . 'ImagenesNegocios' . '/' . 'foto' . '/' . $mensaje;
$ruta1 = '/files/ImagenesNegocios/foto/' . $mensaje;
                $this->Flash->success(__('The imagenes negocio has been saved.'));
                return $this->setAction('redimension',$ruta,$ruta1);
               // return $this->redirect(['action' => 'redimension',$ruta]);
            }
            $this->Flash->error(__('The imagenes negocio could not be saved. Please, try again.'));
        }
        $negocios = $this->ImagenesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('imagenesNegocio', 'negocios'));
        $this->set('_serialize', ['imagenesNegocio']);
    */





public function add1()
    {
        $imagenesNegocio = $this->ImagenesNegocios->newEntity();
        if ($this->request->is(['post','delete'])) {
            $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
            //borro una imagen si ya existe
            $query = $this->ImagenesNegocios->query();
            $ruta = $this->ImagenesNegocios->find()->select(['foto'])->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
    ->toArray();
    if ($ruta != null){
      if(is_array($ruta)){
          $ruta = $ruta[0]->foto;
          }
      else 
      {
        $ruta = $ruta->foto;
        }
            $query->delete()
    ->where(['negocios_id' => $imagenesNegocio->negocios_id, 'ubicacion' => $imagenesNegocio->ubicacion])
    ->execute();
            unlink( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $ruta);
        }
        //.................................
            if ($this->ImagenesNegocios->save($imagenesNegocio)) {
            $conexion = ConnectionManager::get('default');
            $res = $conexion->execute('Call renombrarfoto(?)',[$imagenesNegocio->foto])->fetchAll('assoc');
            $mensaje = $res[0]['@mensaje'];
           rename( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto, ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $mensaje);

                $this->Flash->success(__('The imagenes negocio has been saved.'));
                return $this->redirect(['action' => 'index']);;
            }
            $this->Flash->error(__('The imagenes negocio could not be saved. Please, try again.'));
        }
        $negocios = $this->ImagenesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('imagenesNegocio', 'negocios'));
        $this->set('_serialize', ['imagenesNegocio']);
    }







    /**
     * Edit method
     *
     * @param string|null $id Imagenes Negocio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagenesNegocio = $this->ImagenesNegocios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
            if ($this->ImagenesNegocios->save($imagenesNegocio)) {
                $this->Flash->success(__('The imagenes negocio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagenes negocio could not be saved. Please, try again.'));
        }
        $negocios = $this->ImagenesNegocios->Negocios->find('list', ['limit' => 200]);
        $this->set(compact('imagenesNegocio', 'negocios'));
        $this->set('_serialize', ['imagenesNegocio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagenes Negocio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagenesNegocio = $this->ImagenesNegocios->get($id);
        if ($this->ImagenesNegocios->delete($imagenesNegocio)) {
            $this->Flash->success(__('The imagenes negocio has been deleted.'));
        } else {
            $this->Flash->error(__('The imagenes negocio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function redimension($ruta,$ruta1)
    {
         if ($this->request->is('post')) {
        }
        $this->set(compact(['ruta','ruta1']));
        $this->set('_serialize', ['ruta','ruta1']);
    }
}
