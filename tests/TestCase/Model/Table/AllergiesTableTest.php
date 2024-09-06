<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AllergiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AllergiesTable Test Case
 */
class AllergiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AllergiesTable
     */
    protected $Allergies;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Allergies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Allergies') ? [] : ['className' => AllergiesTable::class];
        $this->Allergies = $this->getTableLocator()->get('Allergies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Allergies);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AllergiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
