<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClerosTable Test Case
 */
class ClerosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClerosTable
     */
    public $Cleros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cleros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cleros') ? [] : ['className' => 'App\Model\Table\ClerosTable'];
        $this->Cleros = TableRegistry::get('Cleros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cleros);

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
}
