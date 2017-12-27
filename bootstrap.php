<?php

/**
* @package   s9e\fancypants
* @copyright Copyright (c) 2015-2017 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\Flarum\FancyPants;

use Flarum\Formatter\Event\Configuring;
use Illuminate\Events\Dispatcher;

function subscribe(Dispatcher $events)
{
	$events->listen(
		Configuring::class,
		function (Configuring $event)
		{
			$event->configurator->FancyPants;
		}
	);
};

return __NAMESPACE__ . '\\subscribe';