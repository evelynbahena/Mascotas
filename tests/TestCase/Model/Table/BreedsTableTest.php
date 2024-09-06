<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BreedsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BreedsTable Test Case
 */
class BreedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BreedsTable
     */
    protected $Breeds;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Breeds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Breeds') ? [] : ['className' => BreedsTable::class];
        $this->Breeds = $this->getTableLocator()->get('Breeds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Breeds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BreedsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
