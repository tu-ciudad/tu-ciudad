<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Publicacione Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $cuerpo
 * @property \Cake\I18n\Time $fecha
 * @property float $precio
 * @property int $negocios_id
 *
 * @property \App\Model\Entity\Negocio $negocio
 * @property \App\Model\Entity\Tag[] $tags
 */
class Publicacione extends Entity
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
