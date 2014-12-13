<?php

namespace Creativestyle\Component\Notification\Model;

/**
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 */
class InsiteNotification
{
    protected $id;
    protected $title;
    protected $link;
    protected $isRead;
    protected $textContent;
    protected $htmlContent;
    protected $imageSrc;
    protected $date;


    public function getArrayRepresentation()
    {
        return array(
            //'title' => $this->getTitle(),
            'link' => $this->getLink(),
            'id' => $this->getId(),
            'isRead' => $this->getIsRead(),
            // 'textContent' => $this->getTextContent(),
            // 'htmlContent' => $this->getHtmlContent(),
            'image' => $this->getImageSrc(),
            'content' => $this->getHtmlContent(),
            'date' => $this->getDate(),
        );
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of link.
     *
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the value of link.
     *
     * @param mixed $link the link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->link = $link;

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
     * Gets the value of date.
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the value of date.
     *
     * @param mixed $date the date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets the value of textContent.
     *
     * @return mixed
     */
    public function getTextContent()
    {
        return $this->textContent;
    }

    /**
     * Sets the value of textContent.
     *
     * @param mixed $textContent the text content
     *
     * @return self
     */
    public function setTextContent($textContent)
    {
        $this->textContent = $textContent;

        return $this;
    }

    /**
     * Gets the value of htmlContent.
     *
     * @return mixed
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    /**
     * Sets the value of htmlContent.
     *
     * @param mixed $htmlContent the html content
     *
     * @return self
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;

        return $this;
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
     * Sets the value of id.
     *
     * @param mixed $id the id 
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of imageSrc.
     *
     * @return mixed
     */
    public function getImageSrc()
    {
        return $this->imageSrc;
    }
    
    /**
     * Sets the value of imageSrc.
     *
     * @param mixed $imageSrc the image src 
     *
     * @return self
     */
    public function setImageSrc($imageSrc)
    {
        $this->imageSrc = $imageSrc;

        return $this;
    }
}