<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Allergy Entity
 *
 * @property string $id_allergy
 * @property string|null $name
 * @property string|null $section
 * @property string|null $notes
 * @property string|null $remedy
 * @property \Cake\I18n\FrozenTime|null $last_date
 */
class Allergy extends Entity
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
        'section' => true,
        'notes' => true,
        'remedy' => true,
        'last_date' => true,
    ];
}
