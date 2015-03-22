<?php namespace Matthis\Eventing\Contracts;

interface Dispatcher
{
    public function dispatch(array $events);
} 