<?php

namespace Creativestyle\Component\Notification\Model;

interface NotificationInterface
{
    public function getType();
    public function getObject();
    public function getSubscriber();
    public function getBroadcaster();
    public function isRead();
}