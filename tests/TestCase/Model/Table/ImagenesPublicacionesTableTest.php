<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagenesPublicacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagenesPublicacionesTable Test Case
 */
class ImagenesPublicacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagenesPublicacionesTable
     */
    public $ImagenesPublicaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagenes_publicaciones',
        'app.publicaciones',
        'app.negocios',
        'app.lugares',
        'app.tags',
        'app.negocios_tags',
        'app.publicaciones_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ImagenesPublicaciones') ? [] : ['className' => 'App\Model\Table\ImagenesPublicacionesTable'];
        $this->ImagenesPublicaciones = TableRegistry::get('ImagenesPublicaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImagenesPublicaciones);

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
