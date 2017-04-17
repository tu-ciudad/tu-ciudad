<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher; //include this line

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $email
 * @property string $contraseña
 * @property \Cake\I18n\Time $creado
 * @property \Cake\I18n\Time $ultima_conexion
 */
class Usuario extends Entity
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

    protected function _setcontraseña($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
