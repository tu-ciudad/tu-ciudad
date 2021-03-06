<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Negocio Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $telefono
 * @property string $direccion
 * @property string $descripcion
 * @property int $lugares_id
 * @property string $perfilfb
 * @property string $email
 * @property int $users_id
 *
 * @property \App\Model\Entity\Lugare $lugare
 * @property \App\Model\Entity\Tag[] $tags
 */
class Negocio extends Entity
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
