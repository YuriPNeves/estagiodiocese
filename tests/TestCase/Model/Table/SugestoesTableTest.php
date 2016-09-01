<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SugestoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SugestoesTable Test Case
 */
class SugestoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SugestoesTable
     */
    public $Sugestoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sugestoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sugestoes') ? [] : ['className' => 'App\Model\Table\SugestoesTable'];
        $this->Sugestoes = TableRegistry::get('Sugestoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sugestoes);

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
