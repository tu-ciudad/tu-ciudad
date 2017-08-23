<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NegociosTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NegociosTagsTable Test Case
 */
class NegociosTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NegociosTagsTable
     */
    public $NegociosTags;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NegociosTags') ? [] : ['className' => 'App\Model\Table\NegociosTagsTable'];
        $this->NegociosTags = TableRegistry::get('NegociosTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NegociosTags);

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
