<?php

namespace Creativestyle\Component\Notification\Builder\Strategy;

use Creativestyle\Component\Notification\Model\Notification;

class BaseBuildStrategy implements BuildStrategyInterface
{
    protected $class;
    public function __construct($class = null)
    {
        $this->class = $class ? $class : 'Creativestyle\Component\Notification\Model\Notification';
    }

    public function createNew($object)
    {
        $notification = new $this->class();
        $notification
            ->setType(Notification::TYPE_BASE)
            ->setObject($object)
            ->setObjectId($object->getId())
            ->setObjectType(get_class($object))
        ;

        return $notification;
    }
}