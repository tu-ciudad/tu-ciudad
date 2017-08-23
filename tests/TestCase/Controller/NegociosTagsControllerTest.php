<?php
namespace App\Test\TestCase\Controller;

use App\Controller\NegociosTagsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\NegociosTagsController Test Case
 */
class NegociosTagsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.negocios_tags',
        'app.negocios',
        'app.lugares',
        'app.users',
        'app.ubicaciones_negocios',
        'app.imagenes_negocios',
        'app.productos',
        'app.imagenes_productos',
        'app.tags',
        'app.productos_tags',
        'app.tagsnegocios'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
