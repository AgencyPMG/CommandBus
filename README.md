# Command Bus

A simple command bus implementation for PHP 5.4+.

## Example

```php
use PMG\CommandBus\Command;
use PMG\CommandBus\CommandHandler;
use PMG\CommandBus\AbstractCommand;
use PMG\CommandBus\DefaultCommandBus;

class HelloCommand extends AbstractCommand
{
    // noop
}

class HelloHandler implements CommandHandler
{
    public function handle(Command $helloCommand)
    {
        echo 'Hello, ', $helloCommand['name'], PHP_EOL;
    }
}

$bus = new DefaultCommandBus();
$bus->execute(new HelloCommand(['name' => 'Chris'])); // outputs "Hello, Chris"
```

## Integration With Your Container

Implement `PMG\CommandBus\HandlerFactory` and use your container. Here's an
example with [Aura.DI](https://github.com/auraphp/Aura.Di).

```php
use PMG\CommandBus\HandlerFactory;
use PMG\CommandBus\DefaultCommandBus;
use Aura\Di\ContainerInterface;

class AuraHandlerFactory implements HandlerFactory
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function createHandler($handlerClass)
    {
        return $this->container->get($handlerClass);
    }
}

$bus = new DefaultCommandBus(new AuraHandlerFactory(get_the_container_somehow()));
$bus->execute(new HelloCommand(['name' => 'Rodger']));
```
