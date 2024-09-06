<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VeterinariansTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VeterinariansTable Test Case
 */
class VeterinariansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VeterinariansTable
     */
    protected $Veterinarians;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Veterinarians',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Veterinarians') ? [] : ['className' => VeterinariansTable::class];
        $this->Veterinarians = $this->getTableLocator()->get('Veterinarians', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Veterinarians);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VeterinariansTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
