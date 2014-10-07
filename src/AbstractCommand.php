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
 * ABC for commands, provides immutable array access.
 *
 * @since   1.0
 */
abstract class AbstractCommand implements Command
{
    protected $attributes = array();

    public function __construct(array $attributes=[])
    {
        $this->attributes = $attributes;
    }

    public function offsetGet($key)
    {
        return array_key_exists($key, $this->attributes) ? $this->attributes[$key] : null;
    }

    public function offsetExists($key)
    {
        return array_key_exists($key, $this->attributes);
    }

    public function offsetSet($key, $val)
    {
        throw $this->immutable();
    }

    public function offsetUnset($key)
    {
        throw $this->immutable();
    }

    protected function immutable()
    {
        return new \BadMethodCallException(sprintf('%s is immutable', get_class($this)));
    }
}
