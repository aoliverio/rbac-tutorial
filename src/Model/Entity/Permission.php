<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Permission Entity.
 *
 * @property int $id
 * @property int $object_id
 * @property \App\Model\Entity\Object $object
 * @property int $operation_id
 * @property \App\Model\Entity\Operation $operation
 * @property string $name
 * @property string $descption
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Role[] $roles
 */
class Permission extends Entity
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
        'id' => false,
    ];
}
