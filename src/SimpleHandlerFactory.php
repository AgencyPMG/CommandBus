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
 * The simple implementation of `HandlerFactory` -- not realy suitable for use
 * other than testing.
 *
 * @since   1.0
 */
final class SimpleHandlerFactory implements HandlerFactory
{
    /**
     * {@inheritdoc}
     */
    public function createHandler($handlerClass)
    {
        $handler = new $handlerClass();
        if (!$handler instanceof CommandHandler) {
            throw new Exception\InvalidHandlerException(sprintf(
                'Handler "%s" does not implement %s\\CommandHandler',
                $handlerClass,
                __NAMESPACE__
            ));
        }

        return $handler;
    }
}
