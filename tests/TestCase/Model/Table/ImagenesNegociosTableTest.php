<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagenesNegociosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagenesNegociosTable Test Case
 */
class ImagenesNegociosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagenesNegociosTable
     */
    public $ImagenesNegocios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagenes_negocios',
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
        $config = TableRegistry::exists('ImagenesNegocios') ? [] : ['className' => 'App\Model\Table\ImagenesNegociosTable'];
        $this->ImagenesNegocios = TableRegistry::get('ImagenesNegocios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImagenesNegocios);

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
