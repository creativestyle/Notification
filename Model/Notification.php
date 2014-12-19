<?php

namespace Creativestyle\Component\Notification\Model;

use Creativestyle\Component\Notification\Model\NotificationInterface;
use Creativestyle\Component\Notification\Model\ObjectHolderInterface;
/**
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 */
class Notification implements NotificationInterface, ObjectHolderInterface
{
    const TYPE_BASE = 'baseNotification';

    protected $id;
    protected $type;
    /*
     * @var object related with notification
     */
    protected $object;
    protected $objectId;
    protected $objectType;
    /*
     * @var UserInterface
     * If null global notification
     */
    protected $broadcaster;
    /*
     * @var UserInterface
     * User that notification belongs to
     */
    protected $subscriber;
    protected $isRead;
    protected $createdAt;
    protected $updatedAt;
    protected $subject;
    protected $body;
    protected $sentAt;
    protected $insiteNotification;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->isRead = false;
    }

    public function deliver()
    {
        $this->sendAt = new \DateTime();
    } 

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Sets the value of type.
     *
     * @param mixed $type the type 
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of object.
     *
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }
    
    /**
     * Sets the value of object.
     *
     * @param mixed $object the object 
     *
     * @return self
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Gets the value of isRead.
     *
     * @return mixed
     */
    public function getIsRead()
    {
        return $this->isRead;
    }
    
    /**
     * Sets the value of isRead.
     *
     * @param mixed $isRead the is read 
     *
     * @return self
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Gets the value of createdAt.
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * Sets the value of createdAt.
     *
     * @param mixed $createdAt the created at 
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Gets the value of updatedAt.
     *
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * Sets the value of updatedAt.
     *
     * @param mixed $updatedAt the updated at 
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Gets the value of subject.
     *
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }
    
    /**
     * Sets the value of subject.
     *
     * @param mixed $subject the subject 
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Gets the value of body.
     *
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }
    
    /**
     * Sets the value of body.
     *
     * @param mixed $body the body 
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Gets the value of sentAt.
     *
     * @return mixed
     */
    public function getSentAt()
    {
        return $this->sentAt;
    }
    
    /**
     * Sets the value of sentAt.
     *
     * @param mixed $sentAt the sent at 
     *
     * @return self
     */
    public function setSentAt($sentAt)
    {
        $this->sentAt = $sentAt;

        return $this;
    }

    /**
     * Gets the value of subscriber.
     *subscriber
     * @return mixed
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }
    
    /**
     * Sets the value of subscriber.
     *
     * @param mixed $subscriber the subscriber 
     *
     * @return self
     */
    public function setSubscriber($subscriber)
    {
        $this->subscriber = $subscriber;

        return $this;
    }

    /**
     * Gets the value of objectType.
     *
     * @return mixed
     */
    public function getObjectType()
    {
        return $this->objectType;
    }
    
    /**
     * Sets the value of objectType.
     *
     * @param mixed $objectType the object type 
     *
     * @return self
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Gets the value of broadcaster.
     *
     * @return mixed
     */
    public function getBroadcaster()
    {
        return $this->broadcaster;
    }
    
    /**
     * Sets the value of broadcaster.
     *
     * @param mixed $broadcaster the broadcaster 
     *
     * @return self
     */
    public function setBroadcaster($broadcaster)
    {
        $this->broadcaster = $broadcaster;

        return $this;
    }

    public function isRead()
    {
        return $this->isRead;
    }

    /**
     * Gets the value of objectId.
     *
     * @return mixed
     */
    public function getObjectId()
    {
        return $this->objectId;
    }
    
    /**
     * Sets the value of objectId.
     *
     * @param mixed $objectId the object id 
     *
     * @return self
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    public function getObjectClass()
    {
        return $this->getObjectType();
    }

    /**
     * Gets the value of insiteNotification.
     *
     * @return mixed
     */
    public function getInsiteNotification()
    {
        return $this->insiteNotification;
    }
    
    /**
     * Sets the value of insiteNotification.
     *
     * @param mixed $insiteNotification the insite notification 
     *
     * @return self
     */
    public function setInsiteNotification($insiteNotification)
    {
        $this->insiteNotification = $insiteNotification;

        return $this;
    }
}