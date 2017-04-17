<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NegociosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NegociosTable Test Case
 */
class NegociosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NegociosTable
     */
    public $Negocios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Negocios') ? [] : ['className' => 'App\Model\Table\NegociosTable'];
        $this->Negocios = TableRegistry::get('Negocios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Negocios);

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
