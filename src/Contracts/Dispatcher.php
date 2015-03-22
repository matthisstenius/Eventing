<?php namespace Matthis\Eventing\Contratcs;

interface Dispatcher
{
    public function dispatch(array $events);
} 