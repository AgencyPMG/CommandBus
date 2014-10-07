<?php
/**
 * PMG - Command Bus
 *
 * @package     PMG\CommandBus
 * @copyright   2014 PMG <https://www.pmg.co>
 * @license     http://opensource.org/licenses/mit MIT
 */

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->addPsr4('PMG\\CommandBus\\', __DIR__.'/unit');
$loader->addPsr4('PMG\\CommandBus\\Stubs\\', __DIR__.'/stubs');
