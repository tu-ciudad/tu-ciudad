<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UbicacionesnegociosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UbicacionesnegociosTable Test Case
 */
class UbicacionesnegociosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UbicacionesnegociosTable
     */
    public $Ubicacionesnegocios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ubicacionesnegocios',
        'app.negocios',
        'app.lugares',
        'app.users',
        'app.ubicaciones_negocios',
        'app.imagenes_negocios',
        'app.productos',
        'app.imagenes_productos',
        'app.tags',
        'app.productos_tags',
        'app.negocios_tags',
        'app.tagsnegocios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ubicacionesnegocios') ? [] : ['className' => 'App\Model\Table\UbicacionesnegociosTable'];
        $this->Ubicacionesnegocios = TableRegistry::get('Ubicacionesnegocios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ubicacionesnegocios);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
