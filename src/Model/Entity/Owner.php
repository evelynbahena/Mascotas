<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Owner Entity
 *
 * @property string $id_owner
 * @property string|null $name
 * @property string|null $last_name
 * @property string|null $second_lastname
 * @property string|null $phone
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $observation
 * @property int|null $fk_credential_id
 * @property int|null $fk_addres_id
 *
 * @property \App\Model\Entity\Credential $credential
 * @property \App\Model\Entity\Addres $addres
 */
class Owner extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'last_name' => true,
        'second_lastname' => true,
        'phone' => true,
        'created' => true,
        'modified' => true,
        'observation' => true,
        'fk_credential_id' => true,
        'fk_addres_id' => true,
        'credential' => true,
        'addres' => true,
    ];
}
