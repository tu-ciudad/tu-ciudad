<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PublicacionesTagsFixture
 *
 */
class PublicacionesTagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'publicaciones_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tags_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_publicaciones_tags_publicaciones1_idx' => ['type' => 'index', 'columns' => ['publicaciones_id'], 'length' => []],
            'fk_publicaciones_tags_tags1_idx' => ['type' => 'index', 'columns' => ['tags_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_publicaciones_tags_publicaciones1' => ['type' => 'foreign', 'columns' => ['publicaciones_id'], 'references' => ['publicaciones', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_publicaciones_tags_tags1' => ['type' => 'foreign', 'columns' => ['tags_id'], 'references' => ['tags', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'publicaciones_id' => 1,
            'tags_id' => 1
        ],
    ];
}
