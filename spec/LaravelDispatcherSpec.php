<?php

namespace spec\Matthis\Eventing;

use Illuminate\Contracts\Logging\Log;
use Illuminate\Events\Dispatcher;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use spec\Matthis\Eventing\TestData\UserHasRegistered;

class LaravelDispatcherSpec extends ObjectBehavior
{
    function let(Dispatcher $dispatcher, Log $log, UserHasRegistered $event)
    {
        $dispatcher->fire('Double.spec.Matthis.Eventing.TestData.UserHasRegistered.P1', $event)->shouldBeCalled();
        $log->info("Event Double.spec.Matthis.Eventing.TestData.UserHasRegistered.P1 was fired")->shouldBeCalled();

        $this->beConstructedWith($dispatcher, $log);
    }

    function it_should_dispatch_all_events(UserHasRegistered $event)
    {
        $events = [$event];

        $this->dispatch($events);
    }
}
