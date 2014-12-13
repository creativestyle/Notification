<?php

namespace Creativestyle\Component\Notification\Notificator;

use Creativestyle\Component\Notification\Model\NotificationInterface;

interface NotificatorInterface
{
    public function notify(NotificationInterface $notification);
}