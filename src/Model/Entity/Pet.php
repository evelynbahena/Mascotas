<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pet Entity
 *
 * @property string $id_pet
 * @property string|null $description
 * @property \Cake\I18n\FrozenDate|null $date_birth
 * @property int|null $sterilized
 * @property string|null $imagen
 * @property string|null $qr_code
 * @property int|null $fk_breed_id
 * @property string|null $fk_veterinatian_id
 * @property int|null $fk_pet_size_id
 *
 * @property \App\Model\Entity\Breed $breed
 * @property \App\Model\Entity\Veterinarian $veterinarian
 * @property \App\Model\Entity\PetSize $pet_size
 */
class Pet extends Entity
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
        'description' => true,
        'date_birth' => true,
        'sterilized' => true,
        'imagen' => true,
        'qr_code' => true,
        'fk_breed_id' => true,
        'fk_veterinatian_id' => true,
        'fk_pet_size_id' => true,
        'breed' => true,
        'veterinarian' => true,
        'pet_size' => true,
        'name' => true,
    ];
}
