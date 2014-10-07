<?php
/**
 * PMG - Command Bus
 *
 * @package     PMG\CommandBus
 * @copyright   2014 PMG <https://www.pmg.co>
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace PMG\CommandBus\Exception;

use PMG\CommandBus\CommandBusException;

/**
 * Throws when a command handler cannot be located.
 *
 * @since   1.0
 */
class InvalidHandlerException extends \UnexpectedValueException implements CommandBusException
{

}
