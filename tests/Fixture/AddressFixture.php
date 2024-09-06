<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AddressFixture
 */
class AddressFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'address';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_address' => 1,
                'street' => 'Lorem ipsum dolor sit amet',
                'ext_number' => 'Lorem ipsum dolor sit amet',
                'int_number' => 'Lorem ipsum dolor sit amet',
                'postal_code' => 'Lorem ipsum dolor sit amet',
                'location' => 'Lorem ipsum dolor sit amet',
                'fk_state_id' => 1,
            ],
        ];
        parent::init();
    }
}
