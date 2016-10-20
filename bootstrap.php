<?php

/**
* @package   s9e\fancypants
* @copyright Copyright (c) 2015-2016 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\Flarum\FancyPants;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

function subscribe(Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$event->configurator->FancyPants;
		}
	);
};

return __NAMESPACE__ . '\\subscribe';