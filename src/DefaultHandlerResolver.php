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
 * Default implementation of HandlerResolver, suitable for most uses.
 *
 * @since   1.0
 */
final class DefaultHandlerResolver implements HandlerResolver
{
    /**
     * {@inheritdoc}
     */
    public function handlerFor(Command $command)
    {
        $handlerClass = $command instanceof HandlerAware ?
            $command->toHandler() : $this->handlerClassFor($command);

        if (!class_exists($handlerClass)) {
            throw new Exception\HandlerNotFoundException(sprintf(
                'Could not locate handler for "%s"',
                get_class($command)
            ));
        }

        return $handlerClass;
    }

    private function handlerClassFor(Command $command)
    {
        $cmdClass = get_class($command);
        return substr_replace($cmdClass, 'Handler', strrpos($cmdClass, 'Command'));
    }
}
