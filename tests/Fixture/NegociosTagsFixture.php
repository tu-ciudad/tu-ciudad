<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NegociosTagsFixture
 *
 */
class NegociosTagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'negocios_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tagsnegocios_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_negocios_tags_negocios1_idx' => ['type' => 'index', 'columns' => ['negocios_id'], 'length' => []],
            'fk_negocios_tags_tagsnegocios1_idx' => ['type' => 'index', 'columns' => ['tagsnegocios_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_negocios_tags_negocios1' => ['type' => 'foreign', 'columns' => ['negocios_id'], 'references' => ['negocios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_negocios_tags_tagsnegocios1' => ['type' => 'foreign', 'columns' => ['tagsnegocios_id'], 'references' => ['tagsnegocios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'negocios_id' => 1,
            'tagsnegocios_id' => 1
        ],
    ];
}
