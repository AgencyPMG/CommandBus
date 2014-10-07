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
 * Turns a command class into a handler class name.
 *
 * @since   1.0
 */
interface HandlerResolver
{
    /**
     * Find the command handler name for a given command.
     *
     * @since   1.0
     * @param   $command the command to resolve
     * @throws  CommandBusException if a handler can't be resolved
     * @return  string
     */
    public function handlerFor(Command $command);
}
