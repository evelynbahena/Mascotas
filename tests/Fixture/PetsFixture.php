<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PetsFixture
 */
class PetsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_pet' => '157e81f4-54d9-4120-8c60-3747d4123ff2',
                'description' => 'Lorem ipsum dolor sit amet',
                'date_birth' => '2024-09-05',
                'sterilized' => 1,
                'imagen' => 'Lorem ipsum dolor sit amet',
                'qr_code' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'fk_breed_id' => 1,
                'fk_veterinatian_id' => 'Lorem ipsum dolor sit amet',
                'fk_pet_size_id' => 1,
            ],
        ];
        parent::init();
    }
}
