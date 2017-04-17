<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LugaresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LugaresTable Test Case
 */
class LugaresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LugaresTable
     */
    public $Lugares;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Lugares') ? [] : ['className' => 'App\Model\Table\LugaresTable'];
        $this->Lugares = TableRegistry::get('Lugares', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lugares);

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
}
