<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PublicacionesTag Entity
 *
 * @property int $id
 * @property int $publicaciones_id
 * @property int $tags_id
 *
 * @property \App\Model\Entity\Publicacione $publicacione
 * @property \App\Model\Entity\Tag $tag
 */
class PublicacionesTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
