<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Addres Entity
 *
 * @property int $id_address
 * @property string|null $street
 * @property string|null $ext_number
 * @property string|null $int_number
 * @property string|null $postal_code
 * @property string|null $location
 * @property int|null $fk_state_id
 *
 * @property \App\Model\Entity\State $state
 */
class Addres extends Entity
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
        'street' => true,
        'ext_number' => true,
        'int_number' => true,
        'postal_code' => true,
        'location' => true,
        'fk_state_id' => true,
        'state' => true,
    ];
}
