<?php namespace Matthis\Eventing;

use Matthis\Eventing\Contracts\DomainEvent;

trait EventRecorder {
    /**
     * @var array
     */
    private $events;

    /**
     * Adds event to events array
     *
     * @param DomainEvent $event
     */
    public function raise(DomainEvent $event)
    {
        $this->events[] = $event;
    }

    /**
     * Returns all events
     */
    public function releaseEvents()
    {
        $events = $this->events;

        $this->events = [];

        return $events;
    }
}