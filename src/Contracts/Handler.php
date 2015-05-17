<?php namespace Matthis\Eventing\Contracts;

interface Handler
{
    public function handle(DomainEvent $event);
} 