<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CredentialsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CredentialsTable Test Case
 */
class CredentialsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CredentialsTable
     */
    protected $Credentials;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Credentials',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Credentials') ? [] : ['className' => CredentialsTable::class];
        $this->Credentials = $this->getTableLocator()->get('Credentials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Credentials);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CredentialsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
