<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TagsnegociosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TagsnegociosTable Test Case
 */
class TagsnegociosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TagsnegociosTable
     */
    public $Tagsnegocios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Tagsnegocios') ? [] : ['className' => 'App\Model\Table\TagsnegociosTable'];
        $this->Tagsnegocios = TableRegistry::get('Tagsnegocios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tagsnegocios);

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
