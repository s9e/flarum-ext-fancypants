<?php

/**
* @package   s9e\fancypants
* @copyright Copyright (c) 2015 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\Flarum\FancyPants;

use Exception;
use Flarum\Events\FormatterConfigurator;
use Flarum\Support\Extension as BaseExtension;
use Illuminate\Events\Dispatcher;

class Extension extends BaseExtension
{
	public function listen(Dispatcher $events)
	{
		$events->subscribe(__NAMESPACE__ . '\\Listener');
	}
}

class Listener
{
	public function subscribe(Dispatcher $events)
	{
		$events->listen('Flarum\\Events\\FormatterConfigurator', [$this, 'enableFancyPants']);
	}

	public function enableFancyPants(FormatterConfigurator $event)
	{
		$event->configurator->FancyPants;
	}
}

return __NAMESPACE__ . '\\Extension';