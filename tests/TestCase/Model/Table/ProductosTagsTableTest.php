<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductosTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductosTagsTable Test Case
 */
class ProductosTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductosTagsTable
     */
    public $ProductosTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.productos_tags',
        'app.productos',
        'app.negocios',
        'app.lugares',
        'app.tags',
        'app.negocios_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductosTags') ? [] : ['className' => 'App\Model\Table\ProductosTagsTable'];
        $this->ProductosTags = TableRegistry::get('ProductosTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductosTags);

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
