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

/* Redimension

$this->loadComponent('Image'); 
$MyImageCom = $this->Image;
$MyImageCom->prepare(ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto);
$MyImageCom->resize(300,300);//width,height,Red,Green,Blue
$MyImageCom->save(ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $mensaje);
unlink(ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto);
*/
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
    }





public function add1()
    {
        $imagenesNegocio = $this->ImagenesNegocios->newEntity();
        if ($this->request->is(['post','delete'])) {
            $imagenesNegocio = $this->ImagenesNegocios->patchEntity($imagenesNegocio, $this->request->getData());
//metodo de gian------------

$imgUrl = $_POST['imgUrl'];
// original sizes
$imgInitW = $_POST['imgInitW'];
$imgInitH = $_POST['imgInitH'];
// resized sizes
$imgW = $_POST['imgW'];
$imgH = $_POST['imgH'];
// offsets
$imgY1 = $_POST['imgY1'];
$imgX1 = $_POST['imgX1'];
// crop box
$cropW = $_POST['cropW'];
$cropH = $_POST['cropH'];
// rotation angle
$angle = $_POST['rotation'];

$jpeg_quality = 100;

$output_filename = $imgUrl;
// uncomment line below to save the cropped image in the same location as the original image.
//$output_filename = dirname($imgUrl). "/";

$what = getimagesize($imgUrl);

switch(strtolower($what['mime']))
{
    case 'image/png':
        $img_r = imagecreatefrompng($imgUrl);
    $source_image = imagecreatefrompng($imgUrl);
    $type = '.png';
        break;
    case 'image/jpeg':
        $img_r = imagecreatefromjpeg($imgUrl);
    $source_image = imagecreatefromjpeg($imgUrl);
    error_log("jpg");
    $type = '.jpeg';
        break;
    case 'image/gif':
        $img_r = imagecreatefromgif($imgUrl);
    $source_image = imagecreatefromgif($imgUrl);
    $type = '.gif';
        break;
    default: die('image type not supported');
}


//Check write Access to Directory

if(!is_writable(dirname($output_filename))){
  $response = Array(
      "status" => 'error',
      "message" => 'Can`t write cropped File'
    );  
}else{

    // resize the original image to size of editor
    $resizedImage = imagecreatetruecolor($imgW, $imgH);
  imagecopyresampled($resizedImage, $source_image, 0, 0, 0, 0, $imgW, $imgH, $imgInitW, $imgInitH);
    // rotate the rezized image
    $rotated_image = imagerotate($resizedImage, -$angle, 0);
    // find new width & height of rotated image
    $rotated_width = imagesx($rotated_image);
    $rotated_height = imagesy($rotated_image);
    // diff between rotated & original sizes
    $dx = $rotated_width - $imgW;
    $dy = $rotated_height - $imgH;
    // crop rotated image to fit into original rezized rectangle
  $cropped_rotated_image = imagecreatetruecolor($imgW, $imgH);
  imagecolortransparent($cropped_rotated_image, imagecolorallocate($cropped_rotated_image, 0, 0, 0));
  imagecopyresampled($cropped_rotated_image, $rotated_image, 0, 0, $dx / 2, $dy / 2, $imgW, $imgH, $imgW, $imgH);
  // crop image into selected area
  $final_image = imagecreatetruecolor($cropW, $cropH);
  imagecolortransparent($final_image, imagecolorallocate($final_image, 0, 0, 0));
  imagecopyresampled($final_image, $cropped_rotated_image, 0, 0, $imgX1, $imgY1, $cropW, $cropH, $cropW, $cropH);
  // finally output png image
  //imagepng($final_image, $output_filename.$type, $png_quality);
  imagejpeg($final_image, $output_filename, $jpeg_quality);
  $response = Array(
      "status" => 'success',
      "url" => $output_filename
    );
}
print json_encode($response);
//------------------------------
            //borro una imagen si ya existe
      /*      $query = $this->ImagenesNegocios->query();
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
    */        //.................................
            if ($this->ImagenesNegocios->save($imagenesNegocio)) {
/*            $conexion = ConnectionManager::get('default');
            $res = $conexion->execute('Call renombrarfoto(?)',[$imagenesNegocio->foto])->fetchAll('assoc');
            $mensaje = $res[0]['@mensaje'];
           rename( ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto, ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $mensaje);

/* Redimension

$this->loadComponent('Image'); 
$MyImageCom = $this->Image;
$MyImageCom->prepare(ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto);
$MyImageCom->resize(300,300);//width,height,Red,Green,Blue
$MyImageCom->save(ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' . DIRECTORY_SEPARATOR . $mensaje);
unlink(ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'ImagenesNegocios' . DIRECTORY_SEPARATOR . 'foto' .DIRECTORY_SEPARATOR. $imagenesNegocio->foto);
*/
// $ruta =  '..' . '/' . 'files' . '/' . 'ImagenesNegocios' . '/' . 'foto' . '/' . $mensaje;
// $ruta1 = '/files/ImagenesNegocios/foto/' . $mensaje;
                $this->Flash->success(__('The imagenes negocio has been saved.'));
                return $this->redirect(['action' => 'index']);
               // return $this->redirect(['action' => 'redimension',$ruta]);
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
