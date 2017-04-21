<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagenesProductosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagenesProductosTable Test Case
 */
class ImagenesProductosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagenesProductosTable
     */
    public $ImagenesProductos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagenes_productos',
        'app.productos',
        'app.negocios',
        'app.lugares'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ImagenesProductos') ? [] : ['className' => 'App\Model\Table\ImagenesProductosTable'];
        $this->ImagenesProductos = TableRegistry::get('ImagenesProductos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImagenesProductos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
