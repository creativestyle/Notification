<?php

namespace Creativestyle\Component\Notification\Model;

/**
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 */
interface InsiteNotificationInterface
{
    public function getArrayRepresentation();
    public function getHtmlContent();
}