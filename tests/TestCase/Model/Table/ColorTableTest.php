<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColorTable Test Case
 */
class ColorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColorTable
     */
    protected $Color;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Color',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Color') ? [] : ['className' => ColorTable::class];
        $this->Color = $this->getTableLocator()->get('Color', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Color);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ColorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
