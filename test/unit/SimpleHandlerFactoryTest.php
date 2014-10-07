<?php
/**
 * PMG - Command Bus
 *
 * @package     PMG\CommandBus
 * @copyright   2014 PMG <https://www.pmg.co>
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace PMG\CommandBus;

class SimpleHandlerFactoryTest extends UnitTestCase
{
    private $factory;

    /**
     * @expectedException PMG\CommandBus\CommandBusException
     */
    public function testNonHandlerClassCausesErrorAfterCreation()
    {
        $this->factory->createHandler('InvalidArgumentException');
    }

    public function testFactoryCreatesHandlerWhenGiveValidHandlerClass()
    {
        $cls = __NAMESPACE__.'\\Stubs\\SimpleHandler';
        $this->assertInstanceOf($cls, $this->factory->createHandler($cls));
    }

    protected function setUp()
    {
        $this->factory = new SimpleHandlerFactory();
    }
}
