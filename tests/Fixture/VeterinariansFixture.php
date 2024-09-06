<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VeterinariansFixture
 */
class VeterinariansFixture extends TestFixture
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
                'id_veterinarian' => '98592b11-2f55-4f82-80f1-1c1a533c10c3',
                'name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'vet_clinic' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
