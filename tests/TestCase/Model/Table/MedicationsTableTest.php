<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedicationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedicationsTable Test Case
 */
class MedicationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MedicationsTable
     */
    protected $Medications;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Medications',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Medications') ? [] : ['className' => MedicationsTable::class];
        $this->Medications = $this->getTableLocator()->get('Medications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Medications);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MedicationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
