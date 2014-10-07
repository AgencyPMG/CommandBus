<?php
/**
 * PMG - Command Bus
 *
 * @package     PMG\CommandBus
 * @copyright   2014 PMG <https://www.pmg.co>
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace PMG\CommandBus\Stubs;

use PMG\CommandBus\HandlerAware;
use PMG\CommandBus\AbstractCommand;

class HandlerAwareStub extends AbstractCommand implements HandlerAware
{
    private $handler;

    public function __construct($handler, array $attr=array())
    {
        parent::__construct($attr);
        $this->handler = $handler;
    }

    public function toHandler()
    {
        return $this->handler;
    }
}
