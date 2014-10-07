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
 * Represents a single command. Values are accessed via array indices.
 *
 * @since   1.0
 */
interface Command extends \ArrayAccess
{

}
