<?php

namespace Creativestyle\Component\Notification\Builder;

use Creativestyle\Component\Notification\Builder\StrategyProvider;
use Creativestyle\Component\Notification\Builder\StrategyProviderInterface;
use Creativestyle\Component\Notification\Model\BroadcasterInterface;
use \BadMethodCallException;

class NotificationBuilder
{
    protected $strategyProvider;
    protected $notification;

    public function __construct($strategyProvider = null)
    {

        if ($strategyProvider instanceof StrategyProviderInterface) {
            $this->strategyProvider = $strategyProvider;
        } else {
            $this->strategyProvider = new StrategyProvider();
        }
    }

    public function __call($method, $arguments)
    {
        if (!method_exists($this->notification, $method)) {
            throw new BadMethodCallException(sprintf('notification has no "%s()" method.', $method));
        }

        call_user_func_array(array($this->notification, $method), $arguments);

        return $this;
    }

    public function create($object, $type, $sender = null)
    {
        $this->createNotificationByStrategy($type, $object);

        if ($sender instanceof BroadcasterInterface) {
            $this->setBroadcaster($sender);
        }
        
        return $this->notification;
    }

    protected function createNotificationByStrategy($type, $object)
    {
        $this->notification = $this->strategyProvider
            ->getBuildStrategy($type)
            ->createNew($object)
        ;

        $this->notification->setType($type);
    }

    public function getClass()
    {
        return $this->class;
    }
}
