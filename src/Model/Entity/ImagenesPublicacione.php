<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ImagenesPublicacione Entity
 *
 * @property int $id
 * @property string $foto
 * @property int $numero
 * @property int $publicaciones_id
 * @property string $foto_dir
 *
 * @property \App\Model\Entity\Publicacione $publicacione
 */
class ImagenesPublicacione extends Entity
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
