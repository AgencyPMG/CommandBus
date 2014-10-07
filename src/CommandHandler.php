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
 * The other side of the command equation: a handler ingests a command and does
 * something.
 *
 * @since   1.0
 */
interface CommandHandler
{
    /**
     * Handle the command -- could do anything.
     *
     * @since   1.0
     * @param   $command The command to handle
     * @throws  Any exception that makes sense for the command.
     * @return  void
     */
    public function handle(Command $command);
}
