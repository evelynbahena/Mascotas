<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Position Entity
 *
 * @property string $id_position
 * @property string|null $longitude
 * @property string|null $latitude
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $status
 * @property string|null $link
 */
class Position extends Entity
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
        'longitude' => true,
        'latitude' => true,
        'created' => true,
        'status' => true,
        'link' => true,
    ];
}
