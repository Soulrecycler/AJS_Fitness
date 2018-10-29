<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BmiTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BmiTable Test Case
 */
class BmiTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BmiTable
     */
    public $Bmi;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bmi'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bmi') ? [] : ['className' => BmiTable::class];
        $this->Bmi = TableRegistry::get('Bmi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bmi);

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
