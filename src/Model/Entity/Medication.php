<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medication Entity
 *
 * @property string $id_medication
 * @property string|null $name
 * @property string|null $mission
 * @property string|null $notes
 * @property string|null $frequency
 * @property string|null $dose
 * @property \Cake\I18n\FrozenTime|null $date_initial
 * @property string|null $duration
 */
class Medication extends Entity
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
        'mission' => true,
        'notes' => true,
        'frequency' => true,
        'dose' => true,
        'date_initial' => true,
        'duration' => true,
    ];
}
