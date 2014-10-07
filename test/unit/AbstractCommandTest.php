<?php
/**
 * PMG - Command Bus
 *
 * @package     PMG\CommandBus
 * @copyright   2014 PMG <https://www.pmg.co>
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace PMG\CommandBus;

class AbstractCommandTest extends UnitTestCase
{
    private $command;

    /**
     * @expectedException BadMethodCallException
     */
    public function testSettingAttributesOnCommandsCausesError()
    {
        $this->command['nope'] = true;
    }

    /**
     * @expectedException BadMethodCallException
     */
    public function testUnsettingAttributesOnCommandsCausesError()
    {
        unset($this->command['one']);
    }

    public function testAttributesPassedIntoConstructorCanBeFetchedFromArray()
    {
        $this->assertArrayHasKey('one', $this->command);
        $this->assertEquals(1, $this->command['one']);
    }

    protected function setUp()
    {
        $this->command = $this->getMockForAbstractClass(
            'PMG\\CommandBus\\AbstractCommand',
            [['one' => 1, 'two' => 2]]
        );
    }
}
