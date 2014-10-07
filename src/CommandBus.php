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
 * Defines the interface for the command bus.
 *
 * @since   1.0
 */
interface CommandBus
{
    /**
     * Execute a single command.
     *
     *
     * @since   1.0
     * @param   $command The command to execute
     * @throws  Any exception that a command handler might throw.
     * @return  void
     */
    public function execute(Command $command);
}
