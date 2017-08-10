<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UbicacionesNegocio Entity
 *
 * @property int $id
 * @property float $lat
 * @property float $lng
 * @property int $negocios_id
 *
 * @property \App\Model\Entity\Negocio $negocio
 */
class UbicacionesNegocio extends Entity
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
