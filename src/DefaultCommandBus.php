<?php
/**
 * PMG - Command Bus
 *
 * @package     PMG\CommandBus
 * @copyright   2014 PMG <https://www.pmg.co>
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace PMG\CommandBus;

/**
 * The default implementation of the `CommandBus`.
 *
 * @since   1.0
 */
final class DefaultCommandBus implements CommandBus
{
    /**
     * @since   1.0
     * @var     HandlerFactory
     */
    private $handlerFactory;

    /**
     * @since   1.0
     * @var     HandlerResolver
     */
    private $handlerResolver;

    /**
     * Set up the handler factory (recommended) and the resolver (just use the
     * default).
     *
     * @since   1.0
     * @param   $factory The handler factory to use
     * @param   $resolver The handler resolver
     * @return  void
     */
    public function __construct(HandlerFactory $factory=null, HandlerResolver $resolver=null)
    {
        $this->handlerFactory = $factory ?: new SimpleHandlerFactory();
        $this->handlerResolver = $resolver ?: new DefaultHandlerResolver();
    }

    /**
     * {@inheritdoc}
     */
    public function execute(Command $command)
    {
        $handlerClass = $this->handlerResolver->handlerFor($command);
        $this->handlerFactory->createHandler($handlerClass)->handle($command);
    }
}
