<?php
/**
 * PMG - Command Bus
 *
 * @package     PMG\CommandBus
 * @copyright   2014 PMG <https://www.pmg.co>
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace PMG\CommandBus;

use PMG\CommandBus\Stubs\SimpleCommand;

/**
 * This is much closer to an integration test than a unit test.
 */
class DefaultCommandBusTest extends UnitTestCase
{
    const HANDLER_CLASS = 'ExampleHander';

    private $bus;

    public function testExecuteLocatesCreatesHandlerAndExecutes()
    {
        ob_start();
        $this->bus->execute(new SimpleCommand());
        $this->assertEquals('Hello', ob_get_clean());
    }

    protected function setUp()
    {
        $this->bus = new DefaultCommandBus();
    }
}
