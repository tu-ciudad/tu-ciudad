<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\ConnectionManager;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        //PARTE PRODUCTOS //////////////////////////////////////////////////////////////
        $query = TableRegistry::get('productos')->find();
        $i = 0;
        $productos = null;
        $imagenesnegocios = null;
        $imagenesproductos = null;
        $negociosdeproductos = null;
        $cantidadproductos = $query->select(['*'])->count();
        $conexion = ConnectionManager::get('default');
        if ($cantidadproductos > 30){
            $productos = $conexion->execute('SELECT * FROM productos order by rand() limit 30')->fetchAll('assoc');
        } else {
            $query = TableRegistry::get('productos')->find();
            $productos = $query->select([])->toArray();
        }
        //Traigo imagenes de los productos
        foreach($productos as $producto):
                //traigo el local del producto
                $query4 = TableRegistry::get('Negocios')->find(); //traigo las imagenes del producto
                $negocios = $query4->select([])->where(['id' => $producto->negocios_id])->toArray();
                $negociosdeproductos[] = $negocios;
                //traigo las imagenes del producto
                $query3 = TableRegistry::get('ImagenesProductos')->find(); //traigo las imagenes del producto
                $imgproductos = $query3->select(['foto','numero'])->where(['productos_id' => $producto->id])->toArray();
                foreach($imgproductos as $imgproducto):
                    $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                endforeach;   
            $imagenesproductos[] = $imgproductos;
            endforeach;
        //PARTE LOCALES //////////////////////////////////////////////////////////////
            $query = TableRegistry::get('Negocios')->find();
            $cantidadlocales = $query->select(['*'])->count();
            if ($cantidadlocales > 6){
                $negocios = $conexion->execute('SELECT * FROM negocios order by rand() limit 30')->fetchAll('assoc');
            } else {
                $query = TableRegistry::get('negocios')->find();
                $negocios = $query->select([])->toArray();
            }
            foreach($negocios as $negocio):
                $query = TableRegistry::get('ImagenesNegocios')->find();
                $portada = $query->select(['foto','ubicacion'])->where(['negocios_id'=>$negocio->id])->toArray();
                $portada['0']->foto = '../../files/ImagenesNegocios/foto/'. $portada['0']->foto;
                $imagenesnegocios[] = $portada;
            endforeach;


        $this->set(compact('page','subpage','productos','imagenesproductos','negocios','imagenesnegocios','negociosdeproductos'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}
