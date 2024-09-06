<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PetSizeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PetSizeTable Test Case
 */
class PetSizeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PetSizeTable
     */
    protected $PetSize;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PetSize',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PetSize') ? [] : ['className' => PetSizeTable::class];
        $this->PetSize = $this->getTableLocator()->get('PetSize', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PetSize);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PetSizeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
