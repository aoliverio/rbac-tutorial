<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogonErrorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogonErrorsTable Test Case
 */
class LogonErrorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogonErrorsTable
     */
    public $LogonErrors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.logon_errors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LogonErrors') ? [] : ['className' => 'App\Model\Table\LogonErrorsTable'];
        $this->LogonErrors = TableRegistry::get('LogonErrors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LogonErrors);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
