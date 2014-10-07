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
use PMG\CommandBus\Stubs\HandlerAwareStub;
use PMG\CommandBus\Stubs\NoHandlerCommand;

class DefaultHandlerResolverTest extends UnitTestCase
{
    private $resolver;

    /**
     * @expectedException PMG\CommandBus\CommandBusException
     */
    public function testCommandWithoutHandlerCausesError()
    {
        $this->resolver->handlerFor(new NoHandlerCommand());
    }

    public function testHandlerAwareCommandUsesValueFromToHandlerMethod()
    {
        $command = new HandlerAwareStub(__NAMESPACE__.'\\Stubs\\SimpleHandler');
        $this->assertEquals(
            __NAMESPACE__.'\\Stubs\\SimpleHandler',
            $this->resolver->handlerFor($command)
        );
    }

    public function testCommandWithValidHandlerReturnsHandlerClass()
    {
        $this->assertEquals(
            'PMG\\CommandBus\\Stubs\\SimpleHandler',
            $this->resolver->handlerFor(new SimpleCommand())
        );
    }

    protected function setUp()
    {
        $this->resolver = new DefaultHandlerResolver();
    }
}
