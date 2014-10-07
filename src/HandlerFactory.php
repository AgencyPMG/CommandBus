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
 * Create a new handler class. This exists for easy integration with your choice
 * of container.
 *
 * @since   1.0
 */
interface HandlerFactory
{
    /**
     * Create a new instance of the handler class passed in.
     *
     * @since   1.0
     * @param   string $handlerClass
     * @throws  CommandBusException if the class supplied is not an instance of
     *          a command handler.
     * @return  CommandHandler
     */
    public function createHandler($handlerClass);
}
