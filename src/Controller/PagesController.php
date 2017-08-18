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
        $productos = TableRegistry::get('productos')->find();
        $i = 0;
        $imagenesnegocios = null;
        $imagenesproductos = null;
        $negociosdeproductos = null;
        $cantidadproductos = $productos->select(['*'])->count();
        $productos = TableRegistry::get('productos')->find();
        if ($cantidadproductos > 30){
            $productos = $productos->find('all',[
                'contain' => ['Negocios','ImagenesProductos','Tags'],
                'order' => 'rand()',
                'limit' => 30,
                ]);
 
        } else {
                $productos = $productos->find('all',[
                'contain' => ['Negocios','ImagenesProductos','Tags'],
                'order' => 'rand()'
                ]);
        }
                foreach ($productos as $producto){
                    foreach($producto->imagenes_productos as $imgproducto):
                         $imgproducto->foto = '../../files/ImagenesProductos/'. $imgproducto->foto;
                   endforeach; 
                }
        //TRAIGO PRODUCTOS POR CATEGORIA

        
        $categorias = ['deporte', 'comida'];
        foreach ($categorias as $categoria){
            $productostabla = TableRegistry::get('productos')->find();
            $productoscategorias = $productostabla->find('all')->contain(['Negocios','ImagenesProductos','Tags'])->innerJoinWith('Tags')->where(['Tags.nombre = :tag'])->bind(':tag',$categoria,'string')->group(['Negocios.nombre','Negocios.telefono','Negocios.direccion','Negocios.descripcion','Negocios.lugares_id','Negocios.perfilfb','Negocios.email','Negocios.users_id','Productos.id']);
            $matriz[] = $productoscategorias;
        }

        //PARTE LOCALES //////////////////////////////////////////////////////////////
            $negocios = TableRegistry::get('Negocios')->find();
            $cantidadlocales = $negocios->select(['*'])->count();
            $negocios = TableRegistry::get('Negocios')->find();
            if ($cantidadlocales > 6){
                $negocios = $negocios->find('all',[
                'contain' => ['ImagenesNegocios','Tags'],
                'order' => 'rand()',
                'limit' => 6,
                ]);
            } else {
                $negocios = $negocios->find('all',[
                'contain' => ['ImagenesNegocios','Tags'],
                'order' => 'rand()',
                ]);
            }
            foreach($negocios as $negocio){
                    foreach ($negocio->imagenes_negocios as $imgcomercio){
                        $imgcomercio->foto = '../../files/ImagenesNegocios/foto/'.$imgcomercio->foto;
                    }
            }
        $this->set(compact('page','subpage','productos','negocios','matriz'));

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
