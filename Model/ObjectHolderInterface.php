<?php

namespace Creativestyle\Component\Notification\Model;

interface ObjectHolderInterface
{
    public function setObject($object);
    public function getObjectId();
    public function getObjectClass();
}