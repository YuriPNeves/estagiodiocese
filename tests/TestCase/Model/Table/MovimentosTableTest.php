<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovimentosTable Test Case
 */
class MovimentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovimentosTable
     */
    public $Movimentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.movimentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Movimentos') ? [] : ['className' => 'App\Model\Table\MovimentosTable'];
        $this->Movimentos = TableRegistry::get('Movimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Movimentos);

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
