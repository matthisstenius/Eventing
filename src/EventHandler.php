<?php namespace Matthis\Eventing;

use Exception;
use Matthis\Eventing\Contracts\DomainEvent;
use ReflectionClass;

abstract class EventHandler {

    /**
     * Translates call to handler with event naming convention
     *
     * @param DomainEvent $event
     * @throws Exception
     */
    public function handle(DomainEvent $event)
    {
        $methodName = $this->getHandlerMethodName($event);

        if ( ! $this->handleMethodExist($methodName)) {
            throw new Exception('Handle method when' . $methodName . 'does not exist!');
        }

        call_user_func_array([$this, 'when' . $methodName], [$event]);
    }

    /**
     * Get class name from event DTO
     *
     * @param object $event
     * @return string
     */
    private function getHandlerMethodName($event)
    {
        return (new ReflectionClass($event))->getShortName();
    }

    /**
     * Check if child class has method with naming convention
     *
     * @param string $methodName
     * @return bool
     */
    private function handleMethodExist($methodName)
    {
        return method_exists($this, 'when'. $methodName);
    }
} 