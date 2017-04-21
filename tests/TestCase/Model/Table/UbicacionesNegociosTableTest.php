<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UbicacionesNegociosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UbicacionesNegociosTable Test Case
 */
class UbicacionesNegociosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UbicacionesNegociosTable
     */
    public $UbicacionesNegocios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ubicaciones_negocios',
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
        $config = TableRegistry::exists('UbicacionesNegocios') ? [] : ['className' => 'App\Model\Table\UbicacionesNegociosTable'];
        $this->UbicacionesNegocios = TableRegistry::get('UbicacionesNegocios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UbicacionesNegocios);

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
