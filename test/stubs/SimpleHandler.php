<?php
/**
 * PMG - Command Bus
 *
 * @package     PMG\CommandBus
 * @copyright   2014 PMG <https://www.pmg.co>
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace PMG\CommandBus\Stubs;

use PMG\CommandBus\Command;
use PMG\CommandBus\CommandHandler;

class SimpleHandler implements CommandHandler
{
    public function handle(Command $command)
    {
        echo 'Hello'; // cause some side effect that we can observe for tests
    }
}
