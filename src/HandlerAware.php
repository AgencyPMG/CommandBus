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
 * Commands may implement this to use custom command handler names.
 *
 * @since   1.0
 */
interface HandlerAware
{
    /**
     * Get the handler class name for the command.
     *
     * @since   1.0
     * @return  string The handler class name
     */
    public function toHandler();
}
