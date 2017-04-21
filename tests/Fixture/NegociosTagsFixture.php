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
        'tags_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_negocios_tags_negocios1_idx' => ['type' => 'index', 'columns' => ['negocios_id'], 'length' => []],
            'fk_negocios_tags_tags1_idx' => ['type' => 'index', 'columns' => ['tags_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_negocios_tags_negocios1' => ['type' => 'foreign', 'columns' => ['negocios_id'], 'references' => ['negocios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_negocios_tags_tags1' => ['type' => 'foreign', 'columns' => ['tags_id'], 'references' => ['tags', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'tags_id' => 1
        ],
    ];
}
